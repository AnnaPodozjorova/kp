<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IDUser')->unsigned()->index();
            $table->foreign('IDUser')->references('id')->on('user');
            $table->integer('IDSubject')->unsigned()->index();
            $table->foreign('IDSubject')->references('id')->on('subject');
            $table->longText('Text');
            $table->timestamp('Date');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_comments');
    }
}
