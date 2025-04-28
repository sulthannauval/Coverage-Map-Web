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
