<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('categoria', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nome')->unique();
        $table->string('descricao_resumida')->nullable();
        $table->string('descricao_completa')->nullable();
        $table->integer('lft')->unique();
        $table->integer('rgt')->unique();
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
        Schema::dropIfExists('categoria');
    }
}
