<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Minicurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minicurso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',255);
            $table->longText('descricao')->nullable();
            $table->longText('material')->nullable();
            $table->string('cronograma');
            $table->string('area');
            $table->string('professor');
            $table->string('local',255);
            $table->string('criador');
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
        Schema::dropIfExists('minicurso');
    }
}
