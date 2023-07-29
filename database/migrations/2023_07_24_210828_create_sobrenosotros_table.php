<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSobrenosotrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sobrenosotros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha', 30);
            $table->string('titulo', 100);
            $table->string('descripcion', 200);
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
        Schema::dropIfExists('sobrenosotros');
    }
}
