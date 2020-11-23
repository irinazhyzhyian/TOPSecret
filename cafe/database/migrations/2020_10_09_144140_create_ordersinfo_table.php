<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersinfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('order_time');
            $table->datetime('delivery_time');
            $table->integer('user_id');
            $table->string('customer_name');
            $table->string('address', 100);
            $table->string('phone', 10);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordersinfo');
    }
}
