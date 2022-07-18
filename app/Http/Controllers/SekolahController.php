<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Jurusan;

class SekolahController extends Controller
{
    public function siswa() {
        
        $sekolah = Siswa::all();
        return view('sekolah.siswa', compact('sekolah'), ['title' => 'Siswa']);

    }
    
    public function edit_siswa($id, $nama, $kelas, $jenis_kelamin, $umur, $jurusan) {

        $sekolah = Siswa::find($id);
        $sekolah->nama = $nama;
        $sekolah->kelas = $kelas;
        $sekolah->jenis_kelamin = $jenis_kelamin;
        $sekolah->umur = $umur;
        $sekolah->jurusan = $jurusan;
        $sekolah->save();

        return $sekolah;

    }

    public function tambah_siswa($nama, $kelas, $jenis_kelamin, $umur, $jurusan) {

        $sekolah = new Siswa;
        $sekolah->nama = $nama;
        $sekolah->kelas = $kelas;
        $sekolah->jenis_kelamin = $jenis_kelamin;
        $sekolah->umur = $umur;
        $sekolah->jurusan = $jurusan;
        $sekolah->save();
        
        return $sekolah;

    }

    public function hapus_siswa($id) {

        $sekolah = Siswa::find($id);
        $sekolah->delete();
        
        return redirect('sekolah/siswa');

    }
    
    public function guru() {
        
        $sekolah = Guru::all();
        return view('sekolah.guru', compact('sekolah'), ['title' => 'Guru']);

    }
    
    public function edit_guru($id, $nama, $mapel, $jenis_kelamin, $umur, $status) {

        $sekolah = Guru::find($id);
        $sekolah->nama = $nama;
        $sekolah->mapel = $mapel;
        $sekolah->jenis_kelamin = $jenis_kelamin;
        $sekolah->umur = $umur;
        $sekolah->status = $status;
        $sekolah->save();

        return $sekolah;

    }

    public function tambah_guru($nama, $mapel, $jenis_kelamin, $umur, $status) {

        $sekolah = new Guru;
        $sekolah->nama = $nama;
        $sekolah->mapel = $mapel;
        $sekolah->jenis_kelamin = $jenis_kelamin;
        $sekolah->umur = $umur;
        $sekolah->status = $status;
        $sekolah->save();
        
        return $sekolah;

    }

    public function hapus_guru($id) {

        $sekolah = Guru::find($id);
        $sekolah->delete();
        
        return redirect('sekolah/guru');

    }
    
    public function jurusan () {
        
        $sekolah = Jurusan::all();
        return view('sekolah.jurusan', compact('sekolah'), ['title' => 'Jurusan']);

    }
    
    public function edit_jurusan($id, $jurusan) {

        $sekolah = Jurusan::find($id);
        $sekolah->jurusan = $jurusan;
        $sekolah->save();

        /*return $sekolah;*/
        return redirect('sekolah/jurusan');

    }

    public function tambah_jurusan($jurusan) {

        $sekolah = new Jurusan;
        $sekolah->jurusan = $jurusan;
        $sekolah->save();
        
        /*return $sekolah;*/
        return redirect('sekolah/jurusan');

    }

    public function hapus_jurusan($id) {

        $sekolah = Jurusan::find($id);
        $sekolah->delete();
        
        // return $sekolah;
        return redirect('sekolah/jurusan');

    }
}