<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wishlist');
            $table->string('carshop');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->
            on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('worker_id')->unsigned();
            $table->foreign('worker_id')->references('id')->
            on('workers')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('preferences');
    }
}
