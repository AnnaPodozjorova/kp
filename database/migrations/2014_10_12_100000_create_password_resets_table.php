<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {//uus tabel password_resets
            $table->string('email',50)->index(); //v4li E-mail indeksiga, et kiiremini andmeid saada
            $table->string('token',10)->index();//v4li token
            $table->timestamp('created_at')->nullable();//timestamp mis lisab ainult created_at v4li, v8ib olla 0
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('password_resets');//drop tabel
    }
}