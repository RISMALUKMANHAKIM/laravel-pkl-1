<?php

namespace Database\Seeders;

use DB;
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
        $jurusan = [
            [
                'jurusan' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'jurusan' =>'Teknik Bisnis Sepeda Motor'
            ],
            [
                'jurusan' =>'Teknik Kendaran Ringan'
            ],
            [
                'jurusan' =>'Kesenian'
            ],
            [
                'jurusan' =>'Pemasaran'
            ]
        ];
        DB::table('jurusans')->insert($jurusan);

    }
}
