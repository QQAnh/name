<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserId')->unsigned();
//            $table->foreign('UserId')->references('id')->on('user_members');

            $table->string('nameBuyes');
            $table->string('nameReceiver');
            $table->string('addressReceiver',767);
            $table->string('phoneBuyes');
            $table->string('phoneReceiver');
            $table->string('totalMoney');
            $table->string('note');
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
        Schema::dropIfExists('orders');
    }
}
