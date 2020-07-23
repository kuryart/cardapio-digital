<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('produtos', function (Blueprint $table)
      {
        $table->increments('id');
        $table->string('nome')->unique();
        $table->integer('categoria_id')->nullable()->unsigned();
        $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('set null')->onUpdate('cascade');
        $table->string('descricao_resumida');
        $table->string('descricao_completa');
        $table->decimal('preco', 5, 2);
        $table->string('foto_url')->nullable();
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
        Schema::dropIfExists('produto');
    }
}
