<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cost');
            $table->string('description');
            $table->date('date');
            $table->integer('order_number');
            $table->string('pay_code');
            $table->float('unit_price');
            $table->float('sub_total');
            $table->float('IVA');
            $table->float('total');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->
            on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('contract_id')->unsigned();
            $table->foreign('contract_id')->references('id')->
            on('contracts')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('payment_type_id')->unsigned();
            $table->foreign('payment_type_id')->references('id')->
            on('payment_types')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('invoices');
    }
}
