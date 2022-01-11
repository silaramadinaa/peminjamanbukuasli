<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDtlPinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtlpinjams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_register')->unsigned();
            $table->bigInteger('id_pinjam')->unsigned();
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');

            $table->foreign('id_pinjam')->references('id')
            ->on('peminjamen')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_register')->references('id')
            ->on('bukus')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('dtlpinjams');
    }
}
