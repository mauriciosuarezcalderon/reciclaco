<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciclanoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclanoticias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comentarioId')->unsigned();
            $table->string('descripcion', 100);
            $table->string('detalle', 500);
            $table->boolean('status', 1)->default(true);
            $table->timestamps();
            $table->foreign('comentarioId')->references('id')->on('reciclacomentarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reciclanoticias');
    }
}
