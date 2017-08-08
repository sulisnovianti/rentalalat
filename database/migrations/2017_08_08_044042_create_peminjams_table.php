<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjams', function (Blueprint $table) {
            $table->increments('id');
             $table->date('tgl-pinjam');
            $table->integer('anggota_id')->unsigned();
            $table->foreign('anggota_id')->references('id')
                  ->on('anggotas')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->integer('jumlah-hari');

            $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')->references('id')
                  ->on('barangs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('peminjams');
    }
}
