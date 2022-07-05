<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.dashboard.index');
});

Route::get('/daftar-1', function () {
    return view('authentikasi.register.step1');
});

Route::get('/daftar-2', function () {
    return view('authentikasi.register.step2');
});

Route::get('/daftar-3', function () {
    return view('authentikasi.register.step3');
});

Route::get('/daftar-4', function () {
    return view('authentikasi.register.step4');
});

Route::get('/daftar-5', function () {
    return view('authentikasi.register.step5');
});

Route::get('/daftar-6', function () {
    return view('authentikasi.register.step6');
});

Route::get('/login', function () {
    return view('authentikasi.login.login');
});

Route::get('/lupa-password', function () {
    return view('authentikasi.lupapassword.lupa');
});

Route::get('/password-baru', function () {
    return view('authentikasi.lupapassword.passwordbaru');
});

Route::get('/berhasil', function () {
    return view('authentikasi.lupapassword.berhasil');
});

Route::get('/', function () {
    return view('homepage.index');
});

Route::get('/login-admin', function () {
    return view('admin.login.login');
});