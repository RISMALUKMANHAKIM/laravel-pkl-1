<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
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
                'jurusan' => 'Rekayasa Perangkat Lunak', 'Teknik Bisnis Sepeda Motor', 'Teknik Kendaran Ringan',
                'kelas' => 'X, XI, XII'
            ],
            [
                'jurusan' =>'Teknik Bisnis Sepeda Motor',
                'kelas' => 'X, XI, XII'
            ],
            [
                'jurusan' =>'Teknik Kendaran Ringan',
                'kelas' => 'X, XI, XII'
            ]
        ];

        DB::table('jurusans')->insert($sample);
    }
}
