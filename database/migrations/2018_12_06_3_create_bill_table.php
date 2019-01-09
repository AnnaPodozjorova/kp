<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IDUser')->unsigned()->index();
            $table->foreign('IDUser')->references('id')->on('users');
            $table->timestamp('Date'); 
            $table->boolean('Status')->default(0);
            $table->integer('IDOrder')->unsigned()->index();
            $table->foreign('IDOrder')->references('id')->on('_order');
        });
  


  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill');
    }
}
