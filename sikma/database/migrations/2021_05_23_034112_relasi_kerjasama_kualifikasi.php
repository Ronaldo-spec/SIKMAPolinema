<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiKerjasamaKualifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kerjasama', function (Blueprint $table) {
          $table->dropColumn('kualifikasi');
          $table->unsignedBigInteger('kualifikasi_id')->nullable();
          $table->foreign('kualifikasi_id')->references('id')->on('kualifikasi'); 
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
          $table->string('kualifikasi');
          $table->dropForeign(['kualifikasi_id']);
      });
    }
}
