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
            $table->string('name', 50)->unique(); //Nombre del tipo de producto
            $table->string('slug');
            $table->boolean('status');
            // $table->float('costo_fijo_bs');
            // $table->float('costo_variable_bs');

            $table->float('costo_fijo_usd');
            $table->float('costo_variable_usd');

            // $table->float('costo_fijo_cop');
            // $table->float('costo_variable_cop');
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
