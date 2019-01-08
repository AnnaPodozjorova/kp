<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_sub_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCat')->unsigned()->index();
            $table->foreign('idCat')->references('id')->on('_category');
            $table->string('name',50)->unique();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_sub_category');
    }
}
