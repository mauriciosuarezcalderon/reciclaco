<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciclacomentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclacomentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuId')->unsigned();
            $table->integer('calificacion');
            $table->timestamps();
            $table->foreign('usuId')->references('id')->on('reciclausers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reciclacomentarios');
    }
}
