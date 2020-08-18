<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('document_id')->unsigned();
            $table->foreign('document_id')
                ->references('id')
                ->on('document_types')
                ->onDelete('cascade');
            $table->string('document', 20);
            $table->string('address');
            $table->string('phone', 20);
            $table->string('email', 50);
            $table->string('banck', 20);
            $table->string('acount', 25);
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
        Schema::dropIfExists('providers');
    }
}
