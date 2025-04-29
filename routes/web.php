<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/login', function () {
    if (session('id_admin')) {
        // Jika session id_admin ada, langsung redirect ke admin
        return redirect()->route('admin');
    }
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/admin', function () {
    if (!session('id_admin')) {
        return redirect('/login')->withErrors([
            'login' => 'Silakan login terlebih dahulu.'
        ]);
    }

    return view('admin');
})->name('admin');

Route::get('/logout', function () {
    session()->flush();
    return redirect('/login')->with('status', 'Berhasil logout.');
});

Route::get('/adminadd', function () {
    if (!session('id_admin')) {
        return redirect('/login')->withErrors([
            'login' => 'Silakan login terlebih dahulu.'
        ]);
    }

    return view('adminadd');
})->name('admin');

Route::get('/adminedit', function () {
    if (!session('id_admin')) {
        return redirect('/login')->withErrors([
            'login' => 'Silakan login terlebih dahulu.'
        ]);
    }

    return view('adminedit');
})->name('admin');

Route::get('/adminediting', function () {
    if (!session('id_admin')) {
        return redirect('/login')->withErrors([
            'login' => 'Silakan login terlebih dahulu.'
        ]);
    }

    return view('adminediting');
})->name('admin');

Route::get('/adminhistory', function () {
    if (!session('id_admin')) {
        return redirect('/login')->withErrors([
            'login' => 'Silakan login terlebih dahulu.'
        ]);
    }

    return view('adminhistory');
})->name('admin');