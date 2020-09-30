<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecaosTable extends Migration
{
    public function up()
    {
        Schema::create('secaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->string('descricao', 700)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('secaos');
    }
}
