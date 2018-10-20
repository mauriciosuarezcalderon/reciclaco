<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciclaimagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclaimagens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 100);
            $table->string('menuUrl', 100)->nullable();
            $table->binary('imagen')->nullable();
            $table->boolean('status', 1)->default(true);
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
        Schema::dropIfExists('reciclaimagens');
    }
}
