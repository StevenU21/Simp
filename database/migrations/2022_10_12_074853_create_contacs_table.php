<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('title');
            $table->string('description');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->
            on('users')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('contacs');
    }
}
