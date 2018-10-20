<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciclausersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclausers', function (Blueprint $table) {
            $table->increments('id');
            /*Se adicionan los campos de la tabla que se quiere crear*/
            $table->string('email', 100);
            $table->string('password', 10);
            $table->boolean('status', 1)->default(true);
            $table->string('name', 100);
            $table->integer('perfilId')->unsigned();
            $table->foreign('perfilId')->references('id')->on('reciclaperfils');
            /*$table->timestamp('fechaRegistro')->default(time());*/
            /*Crea dos columnas, una para registrar fecha de creación y otra para las actualizaciones*/
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
        Schema::dropIfExists('reciclausers');
    }
}
