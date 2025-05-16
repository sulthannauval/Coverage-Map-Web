<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataPemancarController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LogController;
use App\Http\Controllers\KMZController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SinyalController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/map', function () {
    // Ambil entri terakhir
    $latest = DB::table('upload_kmz')->orderByDesc('id_upload')->first();

    if (!$latest || !file_exists(public_path($latest->path_file . '/doc.kml'))) {
        abort(404, 'KML file not found.');
    }

    $pathPrefix = $latest->path_file;
    $kmlPath = public_path($pathPrefix . '/doc.kml');

    // Load & parse file KML
    $kml = simplexml_load_file($kmlPath);
    $kml->registerXPathNamespace('kml', 'http://www.opengis.net/kml/2.2');

    // GroundOverlay
    $overlays = $kml->xpath('//kml:GroundOverlay');
    $images = [];

    foreach ($overlays as $overlay) {
        $icon = (string) $overlay->Icon->href;
        $north = (float) $overlay->LatLonBox->north;
        $south = (float) $overlay->LatLonBox->south;
        $east = (float) $overlay->LatLonBox->east;
        $west = (float) $overlay->LatLonBox->west;

        $images[] = [
            'url' => '/' . $pathPrefix . '/' . ltrim($icon, '/'),
            'bounds' => [
                [$south, $west],
                [$north, $east]
            ]
        ];
    }

    // ScreenOverlay (legend)
    $legendOverlay = $kml->xpath('//kml:ScreenOverlay[1]');
    $legendUrl = null;
    if (!empty($legendOverlay)) {
        $legendHref = (string) $legendOverlay[0]->Icon->href;
        $legendUrl = '/' . $pathPrefix . '/' . ltrim($legendHref, '/');
    }

    // Ambil ikon pertama (jika ada)
    $icons = $kml->xpath('//kml:Style[kml:IconStyle][1]');
    $iconsUsed = null;

    if (!empty($icons)) {
        $iconNode = $icons[0];
        $href = (string) $iconNode->IconStyle->Icon->href;
        $iconsUsed = '/' . $pathPrefix . '/' . ltrim($href, '/');
    }


    return view('map', [
        'overlays' => $images,
        'legendUrl' => $legendUrl,
        'iconsUsed' => $iconsUsed,
        'kmlUrl' => '/' . $pathPrefix . '/doc.kml'
    ]);
});

Route::get('/api/nearest-signal', [SinyalController::class, 'nearest']);

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [FeedbackController::class, 'store'])->name('feedback.store');


Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/login', function () {
    /* if (session('id_admin')) {
        // Jika session id_admin ada, langsung redirect ke admin
        return redirect()->route('admin');
    } */
    if (Auth::guard('admin')->check()) { // Gunakan Auth::check() untuk mengecek apakah admin sudah login
        return redirect()->route('admin'); // Redirect ke admin jika sudah login
    }
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::post('/logout', function () {
    Auth::guard('admin')->logout();
    session()->flush();
    return redirect('/login')->with('status', 'Berhasil logout.');
})->name('logout');


Route::middleware(['adminauth'])->group(function () {
    Route::get('/admin', [DataPemancarController::class, 'index'])->name('admin');
    Route::get('/adminsearch', [DataPemancarController::class, 'liveSearch'])->name('admin.search');

    Route::get('/adminadd', [DataPemancarController::class, 'create'])->name('pemancar.create');
    Route::post('/adminadd', [DataPemancarController::class, 'store'])->name('pemancar.store');

    Route::get('/adminedit', [DataPemancarController::class, 'indexEdit'])->name('adminedit');

    Route::get('/adminediting', fn() => view('adminediting'))->name('adminediting');
    Route::get('/adminediting/{id}', [DataPemancarController::class, 'edit']);
    Route::delete('/admindelete/{id}', [DataPemancarController::class, 'destroy']);
    Route::put('/adminupdate/{id}', [DataPemancarController::class, 'update']);
    Route::get('/admineditupload', [KMZController::class, 'view']);
    Route::post('/admineditupload', [KMZController::class, 'upload'])->name('admineditupload.upload');

    Route::get('/adminhistory', [LogController::class, 'index'], fn() => view('adminhistory'))->name('histories');
    Route::get('/adminhistory/{id}', [LogController::class, 'show'])->name('history.show');

    Route::get('/pemancar/export', [DataPemancarController::class, 'exportCsv'])->name('pemancar.export');

    Route::get('/adminreport', [FeedbackController::class, 'index'])->name('adminreport');
    Route::get('/adminreport/{id}', [FeedbackController::class, 'show'])->name('adminreport.show');

    Route::get('/adminadminmanager', function () {
        return view('adminadminmanager');
    });
    Route::post('/adminadminmanager', [AdminController::class, 'store'])->name('admin.store');
});
