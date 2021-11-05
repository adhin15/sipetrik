<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelaporsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelapors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namabencana');
            $table->string('lokasi');
            $table->string('nama');
            $table->string('email');
            $table->string('nohp');
            $table->integer('korbanmati');
            $table->integer('korbanberat');
            $table->integer('korbanmsedang');
            $table->integer('korbanringan');
            $table->string('status');
            $table->integer('prioritas');
            $table->string('lokasikabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('file');
            
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
        Schema::dropIfExists('pelapors');
    }
}
