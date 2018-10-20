<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciclaresiduosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclaresiduos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('residuo', 100);
            $table->boolean('status', 1)->default(true);
            $table->integer('tiporesiduoId')->unsigned();
            $table->integer('imagenId')->unsigned();
            $table->timestamps();
            $table->foreign('tiporesiduoId')->references('id')->on('reciclatiporesiduos');
            $table->foreign('imagenId')->references('id')->on('reciclaimagens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reciclaresiduos');
    }
}
