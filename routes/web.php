 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Pegawaidbcontroller;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\MyPegawaiController;

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
Route::get('/pegawai', [PegawaiDBcontroller::class, 'index2']);
Route::get('/pegawai/tambah', [PegawaiDBcontroller::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBcontroller::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBcontroller::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBcontroller::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBcontroller::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBcontroller::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route CRUD sepatu
Route::get('/sepatu', [SepatuController::class, 'index'])->name('sepatu.index');
Route::get('/sepatu/create', [SepatuController::class, 'create'])->name('sepatu.create');
Route::post('/sepatu', [SepatuController::class, 'store'])->name('sepatu.store');
Route::get('/sepatu/{kodesepatu}/edit', [SepatuController::class, 'edit'])->name('sepatu.edit');
Route::put('/sepatu/{kodesepatu}', [SepatuController::class, 'update'])->name('sepatu.update');
Route::delete('/sepatu/{kodesepatu}', [SepatuController::class, 'destroy'])->name('sepatu.destroy');

//nilaikuliah latihan EAS E5
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/create', [NilaiKuliahController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');

// Route CRUD Keranjang Belanja Kode B4
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/beli', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');

//Route latihan eas versi sendiri, buku
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::post('/buku/pinjam/{id}', [BukuController::class, 'pinjam'])->name('buku.pinjam');

//Route EAS
Route::get('/mypegawai', [MyPegawaiController::class, 'index'])->name('mypegawai.index');
Route::get('/mypegawai/create', [MyPegawaiController::class, 'create'])->name('mypegawai.create');
Route::post('/mypegawai', [MyPegawaiController::class, 'store'])->name('mypegawai.store');
Route::get('/mypegawai/show/{kodepegawai}', [MyPegawaiController::class, 'show'])->name('mypegawai.show');
