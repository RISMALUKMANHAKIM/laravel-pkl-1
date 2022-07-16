<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;


class JurusanController extends Controller
{
    public function index() {

        // Menampilkan semua data dari model siswa
        // Model siswa mewakili data dari table 'siswas'
        // atau sama dengan query -> select * from siswas
        $sekolah = Jurusan::all();
        return view('sekolah.jurusan', compact('sekolah'));

    }
}
