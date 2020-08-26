<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    public function up()
    {
      Schema::create('categorias', function (Blueprint $table) {
        $table->id();
        $table->string('nome')->unique();
        $table->string('descricao')->nullable();
        $table->foreignId('secao_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
