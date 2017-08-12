<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKembalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kembalis', function (Blueprint $table) {
            $table->increments('id');
         
            $table->integer('peminjam_id')->unsigned();
            $table->foreign('peminjam_id')->references('id')
                  ->on('peminjams')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
                  
            $table->integer('telat');
            $table->integer('denda');

            
                  

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
        Schema::dropIfExists('kembalis');
    }
}
