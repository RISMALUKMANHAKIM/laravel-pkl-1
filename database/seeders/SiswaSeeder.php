<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            [
                'nama' => 'Alif',
                'kelas' => 'XI',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '16',
                'jurusan' => 'RPL'
            ],
            [
                'nama' => 'Hihi',
                'kelas' => 'XII',
                'jenis_kelamin' => 'Perempuan',
                'umur' => '17',
                'jurusan' => 'RPL'
            ],
            [
                'nama' => 'Adi',
                'kelas' => 'X',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '15',
                'jurusan' => 'TKR'
            ],
            [
                'nama' => 'Dudu',
                'kelas' => 'XII',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '17',
                'jurusan' => 'TKR'
            ],
            [
                'nama' => 'Dada',
                'kelas' => 'X',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '15',
                'jurusan' => 'TBSM'
            ]
        ];
        DB::table('siswas')->insert($siswa);
        
    }
}
