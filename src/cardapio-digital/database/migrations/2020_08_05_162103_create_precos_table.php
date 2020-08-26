<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrecosTable extends Migration
{
    public function up()
    {
        Schema::create('precos', function (Blueprint $table) {
            $table->id();
            $table->string('legenda')->unique();
            $table->decimal('valor', 5, 2);
            $table->foreignId('produto_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('precos');
    }
}
