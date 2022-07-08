<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/', function () {
    return view('homepage.index');
});
//login
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/proses-login', [AuthController::class, 'proses_login']);
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
//lupa password
Route::get('/lupa-password',[AuthController::class, 'lupa_password'])->name('lupa_password');
Route::post('/proses-lupapassword', [AuthController::class, 'proses_lupapassword']);
Route::get('/password-baru/{id}',[AuthController::class, 'password_baru'])->name('password_baru');
Route::post('/proses-password-baru/{id}', [AuthController::class, 'proses_password_baru']);
//register
Route::get('/daftar',[AuthController::class, 'index'])->name('daftar');
Route::post('/daftar/store', [AuthController::class, 'register'])->name('register');
Route::get('/verifikasi',[AuthController::class, 'verification'])->name('verification');
Route::post('/proses/verifikasi',[AuthController::class, 'proses_verification'])->name('proses_verification');
Route::get('/profil-satu',[AuthController::class, 'profil_satu'])->name('profil_satu');
Route::post('/proses/profilsatu',[AuthController::class, 'proses_profilsatu'])->name('proses_profilsatu');
Route::get('/profil-dua',[AuthController::class, 'profil_dua'])->name('profil_dua');
Route::get('/cities/{id}', [AuthController::class, 'get_kota']);
Route::post('/proses/profildua',[AuthController::class, 'proses_profildua'])->name('proses_profildua');
Route::get('/profil-tiga',[AuthController::class, 'profil_tiga'])->name('profil_tiga');
Route::post('/proses/profiltiga',[AuthController::class, 'proses_profiltiga'])->name('proses_profiltiga');
Route::get('/selesai',[AuthController::class, 'selesai'])->name('selesai');

Route::get('/login-admin',[AuthController::class, 'login_admin'])->name('login_admin');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['login_check:0']], function () {
        Route::resource('admin', AdminController::class);
    });
    // Route::group(['middleware' => ['login_check:1']], function () {
    //     Route::resource('admin', AdminController::class);
    // });
    // Route::group(['middleware' => ['login_check:2']], function () {
    //     Route::resource('admin', AdminController::class);
    // });
    // Route::group(['middleware' => ['login_check:3']], function () {
    //     Route::resource('admin', AdminController::class);
    // });
});

// Route::get('/admin', function () {
//     return view('admin.dashboard.index');
// });

// Route::get('/akun-terdaftar', function () {
//     return view('admin.akunterdaftar.index');
// });

// Route::get('/daftar-1', function () {
//     return view('authentikasi.register.step1');
// });

// Route::get('/daftar-2', function () {
//     return view('authentikasi.register.step2');
// });

// Route::get('/daftar-3', function () {
//     return view('authentikasi.register.step3');
// });

// Route::get('/daftar-4', function () {
//     return view('authentikasi.register.step4');
// });

// Route::get('/daftar-5', function () {
//     return view('authentikasi.register.step5');
// });

// Route::get('/daftar-6', function () {
//     return view('authentikasi.register.step6');
// });

// Route::get('/login', function () {
//     return view('authentikasi.login.login');
// });

// Route::get('/lupa-password', function () {
//     return view('authentikasi.lupapassword.lupa');
// });

// Route::get('/password-baru', function () {
//     return view('authentikasi.lupapassword.passwordbaru');
// });

// Route::get('/berhasil', function () {
//     return view('authentikasi.lupapassword.berhasil');
// });

// Route::get('/', function () {
//     return view('homepage.index');
// });

// Route::get('/login-admin', function () {
//     return view('admin.login.login');
// });