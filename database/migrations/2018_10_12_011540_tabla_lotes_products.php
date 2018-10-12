<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaLotesProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes_products', function (Blueprint $table) {
            $table->increments('id');
            $table->double('quantity');//cantidad del ingrediente para el lote
            $table->string('unity', 10); //kg, litros
            $table->integer('product_id')->unsigned();//ingrediente del lote_id
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');
            $table->integer('lote_id')->unsigned();
            $table->foreign('lote_id')
                  ->references('id')
                  ->on('lotes')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('lotes_products');
    }
}
