<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index() {

        // Menampilkan semua data dari model siswa
        // Model siswa mewakili data dari table 'siswas'
        // atau sama dengan query -> select * from siswas
        $sekolah = Guru::all();
        return view('sekolah.guru', compact('sekolah'));

    }
}
