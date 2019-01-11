<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) { //uue tabeli 'users' loomine
            $table->increments('id');
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->string('telefon', 12);
            $table->string('address', 50);
            $table->string('email', 50)->unique();
            $table->string('password',255);
            $table->string('type')->default('default');
            $table->rememberToken(); //rememberToken kasutatakse 'remember me' sisse logimisel
            $table->timestamps();//lisab  created_at ja updated_at veerge
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');//drop table
    }
}
