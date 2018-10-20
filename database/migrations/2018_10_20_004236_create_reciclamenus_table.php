<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciclamenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclamenus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipomenuId')->unsigned();
            $table->string('menuDescripcion', 100);
            $table->string('menuUrl', 100);
            $table->boolean('status', 1)->default(true);
            $table->foreign('tipomenuId')->references('id')->on('reciclatipomenus');

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
        Schema::dropIfExists('reciclamenus');
    }
}
