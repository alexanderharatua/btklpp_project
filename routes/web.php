<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

use  App\Http\Controllers\AnnouncementController;
use  App\Http\Controllers\AgendaController;
use  App\Http\Controllers\DownloadsController;
use  App\Http\Controllers\BuletinController; 
use  App\Http\Controllers\HomeadminController; 
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
//     return view('home1');
// });

// Route::get('/index', function () {
//     return view('home1');
// });
Route::get('/index', 'App\Http\Controllers\HomeuserController@tampilagenda');
Route::get('/', 'App\Http\Controllers\HomeuserController@tampilagenda');


// Route::get('/kabarberita', function () {
//     return view('berita');
// });

Route::resource('/kabarberita', 'App\Http\Controllers\TampilberitaController');

Route::resource('/agendapage', 'App\Http\Controllers\TampilagendaController');

Route::resource('/buletinpage', 'App\Http\Controllers\TampilbuletinController');


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

Route::get('/admin/pengumuman/announcements/destroy/{id}', [AnnouncementController::class, 'destroy']);
Route::get('/admin/pengumuman/announcements/edit/{id}', [AnnouncementController::class, 'edit']);

Route::get('/admin/unduh/downloads/destroy/{id}', [DownloadsController::class, 'destroy']);
Route::get('/admin/unduh/downloads/edit/{id}', [DownloadsController::class, 'edit']);

Route::get('/admin/agenda/agendas/destroy/{id}', [AgendaController::class, 'destroy']);
Route::get('/admin/agenda/agendas/edit/{id}',  [AgendaController::class, 'edit']);

Route::get('/admin/buletin/buletins/destroy/{id}', [BuletinController::class, 'destroy']);
Route::get('/admin/buletin/buletins/edit/{id}', [BuletinController::class, 'edit']);

Route::get('/admin', [HomeadminController::class, 'index'])->name('home');
// Route::resource('/admin/pengumuman/announcements',[App\Http\Controllers\AnnouncementController::class, 'index'])->name('create');
Route::resource('/admin/pengumuman/announcements','App\Http\Controllers\AnnouncementController');
Route::resource('/admin/unduh/downloads','App\Http\Controllers\DownloadsController');
Route::resource('/admin/berita/news','App\Http\Controllers\NewsController');
Route::resource('/admin/agenda/agendas','App\Http\Controllers\AgendaController');
Route::resource('/admin/buletin/buletins','App\Http\Controllers\BuletinController');
Route::get('/admin/berita/news','App\Http\Controllers\NewsController@index');


Route::get('/admin/berita/newss', [NewsController::class, 'data']);
Route::get('/admin/pengumuman/annc', [AnnouncementController::class, 'data']);
Route::get('/admin/unduh/tes/tes', [DownloadsController::class, 'data']);
Route::get('/admin/agenda/agen', [AgendaController::class, 'data']);
Route::get('/admin/buletin/bulet', [BuletinController::class, 'data']);