<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

use  App\Http\Controllers\AnnouncementController;
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

Route::get('/kabarberita', function () {
    return view('berita');
});

// Route::get('/pengumuman', function () {
//     return view('pengumuman');
// });

//
Route::resource('/pengumuman','App\Http\Controllers\TampilpengumumanController');
//

Route::resource('/download','App\Http\Controllers\TampildownloadController');

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

Route::get('/admin/berita/news/destroy/{id}', [NewsController::class, 'destroy']);
Route::get('/admin/berita/news/edit/{id}', [NewsController::class, 'edit']);
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/admin/pengumuman/announcements',[App\Http\Controllers\AnnouncementController::class, 'index'])->name('create');
Route::resource('/admin/pengumuman/announcements','App\Http\Controllers\AnnouncementController');
Route::resource('/admin/unduh/downloads','App\Http\Controllers\DownloadsController');
Route::resource('/admin/berita/news','App\Http\Controllers\NewsController');
Route::get('/admin/berita/news','App\Http\Controllers\NewsController@index');

Route::get('/admin/berita/newss', [NewsController::class, 'data']);
Route::get('/admin/pengumuman/annc', [AnnouncementController::class, 'data']);