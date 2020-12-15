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
    return view('home1');
});

Route::get('/berita', function () {
    return view('berita');
});

// Route::get('/pengumuman', function () {
//     return view('pengumuman');
// });

//
Route::resource('/pengumuman','App\Http\Controllers\TampilpengumumanController');
//

Route::get('/download', function () {
    return view('download');
});

Route::get('/tatausaha', function () {
    return view('tatausaha');
});

Route::get('/surveilans', function () {
    return view('surveilans');
});

Route::get('/adkl', function () {
    return view('adkl');
});

Route::get('/ptl', function () {
    return view('ptl');
});

Route::get('/wilayahkerja', function () {
    return view('wilayahkerja');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/wbs', function () {
    return view('wbs');
});

Route::post('/mails', 'App\Http\Controllers\MailController@send');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/admin/pengumuman/announcements',[App\Http\Controllers\AnnouncementController::class, 'index'])->name('create');
Route::resource('/admin/pengumuman/announcements','App\Http\Controllers\AnnouncementController');
