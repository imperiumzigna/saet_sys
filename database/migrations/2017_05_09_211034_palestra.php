<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Palestra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palestra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',255);
            $table->longText('descricao')->nullable();
            $table->dateTime('cronograma');
            $table->string('area');
            $table->string('professor');
            $table->string('criador');
            $table->string('local',255);
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
        Schema::dropIfExists('palestra');
    }
}
