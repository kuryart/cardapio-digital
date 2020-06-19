<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_categoria', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('produto_id')->unsigned()->unique();
          $table->foreign('produto_id')->references('id')->on('produto')->onDelete('cascade')->onUpdate('cascade');
          $table->integer('categoria_id')->unsigned();
          $table->foreign('categoria_id')->references('id')->on('categoria')->onUpdate('cascade');
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
        Schema::dropIfExists('produto_categoria');
    }
}
