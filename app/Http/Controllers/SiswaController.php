<?php

namespace App\Http\Controllers;

// Memanggil Model Siswa
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index() {

        // Menampilkan semua data dari model siswa
        // Model siswa mewakili data dari table 'siswas'
        // atau sama dengan query -> select * from siswas
        $sekolah = Siswa::all();
        return view('sekolah.siswa', compact('sekolah'));

    }

    // public function search($id) {

    //     // Mencari data dari model Post berdasarkan id
    //     // Query -> select * from posts where id = $id
    //     $sekolah = Siswa::find($id);
    //     return $sekolah;

    // }

    // public function edit($id, $a, $b, $c, $d, $e) {

    //     // Mengedit data Post berdasarkan id
    //     $sekolah = Siswa::find($id);
    //     $sekolah->nama = $a;
    //     $sekolah->kelas = $b;
    //     $sekolah->jenis_kelamin = $c;
    //     $sekolah->umur = $d;
    //     $sekolah->kelas = $e;
    //     $sekolah->save();

    //     return $sekolah;

    // }

    // public function tambah($a, $b, $c, $d, $e) {

    //     // Menambah data baru di model Post
    //     $sekolah = new Siswa();
    //     $sekolah->nama = $a;
    //     $sekolah->kelas = $b;
    //     $sekolah->jenis_kelamin = $c;
    //     $sekolah->umur = $d;
    //     $sekolah->kelas = $e;
    //     $sekolah->save();

    //     return $sekolah;

    // }

    // public function hapus($id) {

    //     // Menghapus data di model Post berdasarkan id
    //     $sekolah = Siswa::find($id);
    //     $sekolah->delete();
        
    //     // return $post;
    //     return redirect('siswa');

    // }
}
