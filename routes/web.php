<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataPemancarController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LogController;
use App\Http\Controllers\KMZController;

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
    return view('map');
});

Route::get('/contact', function () {
    return view('contact');
});

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
});
