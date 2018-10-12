<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('slug', 50);//nombre corto
            $table->boolean('visible'); //ocultar o mostrar
            $table->double('cant');//Cantidad de productos lote, ej. 2 cajas
            $table->string('unity', 10);//kg, unidades, cajas
            $table->double('cost_price'); // precio de costo
            $table->double('sale_price'); // precio de venta
            //$table->double('impuesto'); // sobre el que se calcula la ganancia
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
        Schema::dropIfExists('lotes');
    }
}
