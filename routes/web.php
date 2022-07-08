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
