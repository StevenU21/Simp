<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('begin');
            $table->date('end');

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
        Schema::dropIfExists('contracts');
    }
}
