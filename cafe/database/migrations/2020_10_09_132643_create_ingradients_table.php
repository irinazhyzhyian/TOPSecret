<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngradientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingradients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('item_id');
            $table->integer('product_id');
            $table->foreign('item_id')->references('id')->on('menuitems');
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('product_count')->unsigned();
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
        Schema::dropIfExists('ingradients');
    }
}
