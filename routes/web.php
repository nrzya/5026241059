 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Pegawaidbcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});


Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('index', function () {
	return view('index');
});

Route::get('belajar', function () {
	return view('belajar');
});

Route::get('intro', function () {
	return view('intro');
});

Route::get('layout4', function () {
	return view('layout4');
});

Route::get('news', function () {
	return view('news');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('menu', function () {
	return view('menu');
});



Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//pegawaidb
Route::get('/pegawai', [Pegawaidbcontroller::class, 'index2']);
