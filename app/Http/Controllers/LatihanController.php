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

    public function siswa() {

        $a = [
            array('id' =>  1, 'name' => 'Dadang', 'age' => 15, 'hobi' => [
                'Mancing', 'Futsal', 'Renang'
            ]),
            array('id' =>  2, 'name' => 'Dudung', 'age' => 18, 'hobi' => [
                'Baca buku', 'Bernyanyi'
            ]),
        ];
        // dd($a);
        return view('pages.siswa', ['siswa' => $a]);

    }

    public function kampus() {

        $dosen = [
            [
                'name' => 'Yusuf Bachtiar', 'mata_kuliah' => 'Pemrograman Mobile', 'mahasiswa' => 
                [
                    [
                        'name' => 'Muhammad Soleh',
                        'nilai' => 78
                    ],
                    [
                        'name' => 'Jujun Junaedi',
                        'nilai' => 85
                    ],
                    [
                        'name' => 'Mamat Alkatiri',
                        'nilai' => 90
                    ]
                ]
            ],
            [
                'name' => 'Yaris Riyadi', 'mata_kuliah' => 'Pemrograman Web', 'mahasiswa' => 
                [
                    [
                        'name' => 'Alfred McTomminay',
                        'nilai' => 67
                    ],
                    [
                        'name' => 'Bruno Kasmir',
                        'nilai' => 90
                    ]
                ]
            ]
        ];
        // dd($dosen);
        return view('pages.kampus', ['kampus' => $dosen]);
    }

    public function tv() {

        $tv = [
            ['channel' => 'Net TV', 'acara' => 'Talk Show', 'jam' => '19.00'],
            ['channel' => 'TVRI', 'acara' => 'Berita Sore', 'jam' => '17.00'],
            ['channel' => 'BEIRNSPORT', 'acara' => 'Sepak Bola', 'jam' => '20.00'],
            ['channel' => 'Ochannel', 'acara' => 'Film', 'jam' => '10.30'],
            ['channel' => 'Indosiar', 'acara' => 'Sinetron', 'jam' => '09.00']
        ];
        $tgl = "13 Juli 2022";

        // dd($tv);
        return view('pages.televisi', ['tv' => $tv, 'tgl' => $tgl]);
    }

    public function belanja() {

        $belanja = [
            [
                'name' => 'Alfian', 
                'belanja' => [
                    ['produk' => 'Sepatu', 'harga' => 250000],
                    ['produk' => 'Baju', 'harga' => 100000],
                    ['produk' => 'Celana', 'harga' => 150000],
                    ['produk' => 'Kupluk', 'harga' => 100000]
                ]
            ],
            [
                'name' => 'Dida', 
                'belanja' => [
                    ['produk' => 'Topi', 'harga' => 100000],
                    ['produk' => 'Baju', 'harga' => 75000],
                    ['produk' => 'Celana', 'harga' => 125000]
                ]
            ]
        ];

        // dd($belanja);
        return view('pages.belanja', ['belanja' => $belanja]);

    }

    public function nilai() {

        $nilai = [
            [
                'name' => 'Agus', 'nilai' => [
                    ['mapel' => 'Bahasa Indonesia', 'nilai' => 80],
                    ['mapel' => 'Bahasa Inggris', 'nilai' => 97],
                    ['mapel' => 'Produktif Kejuruan', 'nilai' => 67],
                    ['mapel' => 'Matematika', 'nilai' => 100]
                ]
            ],
            [
                'name' => 'Mahmud', 'nilai' => [
                    ['mapel' => 'Bahasa Indonesia', 'nilai' => 78],
                    ['mapel' => 'Bahasa Inggris', 'nilai' => 86],
                    ['mapel' => 'Produktif Kejuruan', 'nilai' => 90],
                    ['mapel' => 'Matematika', 'nilai' => 67]
                ]
            ],
            [
                'name' => 'Rendi', 'nilai' => [
                    ['mapel' => 'Bahasa Indonesia', 'nilai' => 90],
                    ['mapel' => 'Bahasa Inggris', 'nilai' => 50],
                    ['mapel' => 'Produktif Kejuruan', 'nilai' => 65],
                    ['mapel' => 'Matematika', 'nilai' => 78]
                ]
            ],
            [
                'name' => 'Firman', 'nilai' => [
                    ['mapel' => 'Bahasa Indonesia', 'nilai' => 78],
                    ['mapel' => 'Bahasa Inggris', 'nilai' => 90],
                    ['mapel' => 'Produktif Kejuruan', 'nilai' => 56],
                    ['mapel' => 'Matematika', 'nilai' => 78]
                ]
            ],
            [
                'name' => 'Abdul', 'nilai' => [
                    ['mapel' => 'Bahasa Indonesia', 'nilai' => 89],
                    ['mapel' => 'Bahasa Inggris', 'nilai' => 67],
                    ['mapel' => 'Produktif Kejuruan', 'nilai' => 80],
                    ['mapel' => 'Matematika', 'nilai' => 90]
                ]
            ],
        ];

        // dd($nilai);
        return view('pages.nilai', ['nilai' => $nilai]);

    }

}
