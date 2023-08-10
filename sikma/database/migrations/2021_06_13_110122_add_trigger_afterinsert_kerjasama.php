<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class AddTriggerAfterinsertKerjasama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        $now = Carbon::now();
        DB::unprepared('
            CREATE TRIGGER insert_data_email_after_insert_kerjasama AFTER INSERT ON kerjasama
            FOR EACH ROW
            BEGIN
            INSERT INTO `emails` (`subject`,`title`, `body`, `tgl_buat`,`tgl_kirim`, `delivered`)
            VALUES ("Peringatan Masa Berlaku Kerjasama", "Peringatan Masa Berlaku Kerjasama", 
            "Sehubungan dengan akan berakhirnya kerjasama dengan mitra, maka diberitahukan untuk meninjau kelanjutan dari hubungan kerjasama. Berikut rincian kerjasama yang akan segera berakhir dalam 6 bulan kedepan", 
            "'.$now.'", CAST(DATE_SUB(NEW.tgl_akhir, INTERVAL 6 MONTH) AS CHAR) , "NO");
            END
            ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `insert_data_email_after_insert_kerjasama`');
    }
}
