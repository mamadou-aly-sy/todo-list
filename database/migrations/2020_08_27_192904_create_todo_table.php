<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_cat')->unsigned();
            $table->timestamps();


            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_cat')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo');
    }
}
