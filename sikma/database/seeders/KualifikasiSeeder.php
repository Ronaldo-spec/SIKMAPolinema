<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KualifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$data = [
          ['kualifikasi' => 'Dalam Negeri',],
          ['kualifikasi' => 'Luar Negeri',],
        ];

        DB::table('kualifikasi')->insert($data);
    }
}
