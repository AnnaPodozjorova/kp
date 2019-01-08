<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSubCat')->unsigned()->index();
            $table->foreign('idSubCat')->references('id')->on('_sub_category');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('cover')->nullable();
            $table->integer('quantity');
            $table->decimal('price');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject');
    }
}
