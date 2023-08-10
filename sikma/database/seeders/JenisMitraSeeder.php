<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisMitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          ['jenis_mitra' => 'PT',],
          ['jenis_mitra' => 'Industri',],
          ['jenis_mitra' => 'Lembaga',],
          ['jenis_mitra' => 'Pemerintah',],
        ];

        DB::table('jenis_mitra')->insert($data);
    }
}
