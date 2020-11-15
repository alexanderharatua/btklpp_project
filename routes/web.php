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

Route::get('/', function () {
    return view('home1');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/download', function () {
    return view('download');
});

Route::get('/wbs', function () {
    return view('wbs');
});

Route::post('/mails', 'App\Http\Controllers\MailController@send');
