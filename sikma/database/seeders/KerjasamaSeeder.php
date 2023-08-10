<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KerjasamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          [   'mitra' => 'PT. PLN(Persero)',
              'tgl_mulai' => '2021-05-23',
              'tgl_akhir' => '2021-11-23',
              'kualifikasi_id' => 1,
              'jenismitra_id' => 1,
              'bentuk_kerjasama' => 'Kelas Kerjasama',
              'telepon' => '01248012434',
              'email' => 'pln@pln.id',
          ],
          [   'mitra' => 'Garuda Indonesia',
              'tgl_mulai' => '2021-06-23',
              'tgl_akhir' => '2021-12-17',
              'kualifikasi_id' => 1,
              'jenismitra_id' => 2,
              'bentuk_kerjasama' => 'Kelas Kerjasama',
              'telepon' => '01248012434',
              'email' => 'pln@pln.id',
          ],
        ];

        DB::table('kerjasama')->insert($data);
    }
}
