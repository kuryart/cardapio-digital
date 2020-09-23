<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
      Schema::create('produtos', function (Blueprint $table)
      {
        $table->id();
        $table->string('nome')->unique();
        $table->string('descricao');
        $table->foreignId('categoria_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        $table->string('foto_url')->nullable();
        $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
