<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->integer('provider_id')->unsigned();
            $table->foreign('provider_id')
                ->references('id')
                ->on('providers')
                ->onDelete('cascade');
            $table->integer('lote_id')->unsigned();
            $table->foreign('lote_id')
                ->references('id')
                ->on('lotes')
                ->onDelete('cascade');
            $table->double('price'); // precio por unidad de medida
            $table->string('cant');  // cantidad
            $table->string('unity'); // unidad de medida: kg, cajas, mts...
            $table->double('cost');  // costo de la compra: cost = cant*price
            $table->double('stock'); // en almacén para ese entonces stock += cant
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
        Schema::dropIfExists('purchases');
    }
}
