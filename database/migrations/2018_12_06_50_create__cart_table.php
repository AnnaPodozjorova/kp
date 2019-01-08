<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_cart', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IDSubject')->unsigned()->index();
            $table->foreign('IDSubject')->references('id')->on('subject');
            $table->integer('Quantity');
            $table->decimal('Total');
            $table->integer('IDBill')->unsigned()->index();
            $table->foreign('IDBill')->references('id')->on('bill');
            $table->Timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_cart');
    }
}
