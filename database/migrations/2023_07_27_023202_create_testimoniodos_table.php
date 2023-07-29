<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimoniodos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('paterno', 30);
            $table->string('materno', 30);
            $table->string('profesion', 50);
            $table->string('comentario', 700);
            $table->string('logo')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimoniodos');
    }
}
