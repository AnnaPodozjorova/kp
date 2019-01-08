<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('StartDate')->nullable();;
            $table->timestamp('EndDate')->nullable();;
            $table->integer('IDUser')->unsigned()->index();
            $table->foreign('IDUser')->references('id')->on('user');
            $table->integer('IDCard')->unsigned()->index();
            $table->foreign('IDCard')->references('id')->on('_card_type');
        });

 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card');
    }
}
