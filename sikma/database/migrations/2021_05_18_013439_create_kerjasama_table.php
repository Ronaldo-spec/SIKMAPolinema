<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjasamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerjasama', function (Blueprint $table) {
            $table->id();
            $table->string('mitra');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->string('kualifikasi');
            $table->string('jenis_mitra');
            $table->string('bentuk_kerjasama');
            $table->string('telepon');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerjasama');
    }
}
