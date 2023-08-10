<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiKerjasamaJenisMitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kerjasama', function (Blueprint $table) {
          $table->dropColumn('jenis_mitra');
          $table->unsignedBigInteger('jenismitra_id')->nullable();
          $table->foreign('jenismitra_id')->references('id')->on('jenis_mitra'); 
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kerjasama', function (Blueprint $table) {
          $table->string('jenis_mitra');
          $table->dropForeign(['jenismitra_id']);
      });
    }
}
