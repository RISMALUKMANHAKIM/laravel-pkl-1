<?php

// menggunakan / mengimport LatihanController

use App\Http\Controllers\GuruController;
use App\Http\Controllers\LatihanController;
// menggunakan / mengimport PostController
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SekolahController;
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
    return view('welcome');
});

// Route Basic
Route::get('/about', function () {
    return view('tentang');
});

Route::get('/profile', function () {
    $nama = "Hnztt";
    // compact bertugas untuk mengirimikan var ke dalam view
    return view('pages.profile', compact('nama'));
});

// Route::get('/biodata', function () {
//     $nama = "Hanhan";
//     $umur = 16;
//     $jk = "Laki-laki";
//     $pendidikan = "SMK";
//     $sekolah = "Assalaam";
//     // compact bertugas untuk mengirimikan var ke dalam view
//     return view('pages.biodata', compact('nama', 'umur', 'jk', 'pendidikan', 'sekolah'));
// });

// Route Parameter
Route::get('/biodata/{nama}', function ($a) {
    return view('pages.biodata', compact('a'));
});

Route::get('/order/{makanan}/{minuman}/{harga}', function ($makanan ,$minuman, $harga) {
    return view('pages.order', compact('makanan', 'minuman', 'harga'));
});

// Route Optional Parameter
Route::get('/pesan/{pesan?}', function ($a = "-") {
    return view('pages.pesan', compact('a'));
});

// Latihan Route Optional Parameter
Route::get('/pesanan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = "-", $minuman = "-", $cemilan = "-") {
    return view('pages.pesanan', compact('makanan', 'minuman', 'cemilan'));
});

Route::get('/pemesanan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = "Silahkan Pesan Terlebih Dahulu", $minuman = "-", $cemilan = "-") {
    return view('pages.pemesanan', compact('makanan', 'minuman', 'cemilan'));
});

// pemanggilan controller
Route::get('latihan', [LatihanController::class, 'perkenalan']);

Route::get('latihan/{nama?}/{alamat?}/{umur?}', [LatihanController::class, 'perkenalan2']);

Route::get('siswa/', [LatihanController::class, 'siswa']);

Route::get('kampus/', [LatihanController::class, 'kampus']);

Route::get('televisi/', [LatihanController::class, 'tv']);

Route::get('belanja/', [LatihanController::class, 'belanja']);

Route::get('nilai/', [LatihanController::class, 'nilai']);

// Route Post
Route::get('post/', [PostController::class, 'tampil']);
Route::get('post/{id}', [PostController::class, 'search']);
Route::get('post/judul/{title}', [PostController::class, 'search_title']);
Route::get('post/edit/{id}/{title}/{content}', [PostController::class, 'edit']);
Route::get('post/tambah/{title}/{content}', [PostController::class, 'tambah']);
Route::get('post/delete/{id}', [PostController::class, 'hapus']);

// Siswa
Route::get('/sekolah/siswa/', [SekolahController::class, 'siswa']);
// Edit siswa
Route::get('/sekolah/siswa/edit/{id}/{nama}/{kelas}/{jenis_kelamin}/{umur}/{jurusan}', [SekolahController::class, 'edit_siswa']);
// Tambah siswa
Route::get('/sekolah/siswa/tambah/{nama}/{kelas}/{jenis_kelamin}/{umur}/{jurusan}', [SekolahController::class, 'tambah_siswa']);
// Hapus Siswa
Route::get('/sekolah/siswa/delete/{id}', [SekolahController::class, 'hapus_siswa']);

// Guru
Route::get('/sekolah/guru/', [SekolahController::class, 'guru']);
// Edit Guru
Route::get('/sekolah/guru/edit/{id}/{nama}/{mapel}/{jenis_kelamin}/{umur}/{status}', [SekolahController::class, 'edit_guru']);
// Tambah Guru
Route::get('/sekolah/guru/tambah/{nama}/{mapel}/{jenis_kelamin}/{umur}/{status}', [SekolahController::class, 'tambah_guru']);
// Hapus Guru
Route::get('/sekolah/guru/delete/{id}', [SekolahController::class, 'hapus_guru']);

// Jurusan
Route::get('/sekolah/jurusan/', [SekolahController::class, 'jurusan']);
// Edit Jurusan
Route::get('/sekolah/jurusan/edit/{id}/{jurusan}', [SekolahController::class, 'edit_jurusan']);
// Tambah Jurusan
Route::get('/sekolah/jurusan/tambah/{jurusan}', [SekolahController::class, 'tambah_jurusan']);
// Hapus Jurusan
Route::get('/sekolah/jurusan/delete/{id}', [SekolahController::class, 'hapus_jurusan']);