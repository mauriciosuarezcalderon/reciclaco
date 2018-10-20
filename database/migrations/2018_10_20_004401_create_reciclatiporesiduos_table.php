<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciclatiporesiduosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclatiporesiduos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tiporesiduo', 100);
            $table->integer('imagenId')->unsigned();
            $table->boolean('status', 1)->default(true);
            $table->timestamps();
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
        Schema::dropIfExists('reciclatiporesiduos');
    }
}
