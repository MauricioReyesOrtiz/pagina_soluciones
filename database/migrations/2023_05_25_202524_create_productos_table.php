<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { //Tabla PRODUCTO
        Schema::create('productos', function (Blueprint $table) {
            //Atributos
            $table->id();

            $table->string('descripcion',50);
            $table->decimal('precio',8, 2);//significa 8 enteros, 2 decimales
            $table->integer('stock');

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
        Schema::dropIfExists('productos');
    }
}
