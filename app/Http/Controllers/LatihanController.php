<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function perkenalan() {
        $nama = "Hnzz";
        $alamat = "Bandung";
        $umur =  "16";

        return view('pages.perkenalan', compact('nama', 'alamat', 'umur'));
    }

    public function perkenalan2($nama = "-", $alamat = "-",  $umur = "-") {
        $nama = $nama;
        $alamat = $alamat;
        $umur =  $umur;

        return view('pages.perkenalan', compact('nama', 'alamat', 'umur'));
    }
}
