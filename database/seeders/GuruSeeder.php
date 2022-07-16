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
        $sample = [
            [
                'nama' => 'Alfian',
                'mapel' => 'Bahasa Arab',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '22',
                'status' => 'Tetap'
            ],
            [
                'nama' => 'Dida',
                'mapel' => 'Bahasa Alien',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '25',
                'status' => 'Honorer'
            ]
        ];

        DB::table('gurus')->insert($sample);
    }
}
