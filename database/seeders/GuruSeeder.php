<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = [
            [
                'nama' => 'Alfian',
                'mapel' => 'Bahasa Arab',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '22',
                'status' => 'Tetap'
            ],
            [
                'nama' => 'Dida',
                'mapel' => 'Bahasa Inggris',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '25',
                'status' => 'Honorer'
            ],
            [
                'nama' => 'Didi',
                'mapel' => 'Produktif RPL',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '30',
                'status' => 'Tetap'
            ],
            [
                'nama' => 'Dede',
                'mapel' => 'Produktif TKR',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '28',
                'status' => 'Tetap'
            ],
            [
                'nama' => 'Dudu',
                'mapel' => 'Produktif TBSM',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '21',
                'status' => 'Tetap'
            ]
        ];
        DB::table('gurus')->insert($guru);
        
    }
}
