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
        $sample = [
            [
                'nama' => 'Alif',
                'kelas' => 'XI',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '16',
                'jurusan' => 'RPL'
            ],
            [
                'nama' => 'Baba',
                'kelas' => 'XII',
                'jenis_kelamin' => 'Laki-laki',
                'umur' => '17',
                'jurusan' => 'RPL'
            ]
        ];

        DB::table('siswas')->insert($sample);
        
    }
}
