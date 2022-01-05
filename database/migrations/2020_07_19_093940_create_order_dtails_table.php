<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDtailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_dtails', function (Blueprint $table) {
            $table->increments('orderDetail_id');
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('color');
            $table->string('size');
            $table->integer('quantity');
            $table->float('price');
            $table->timestamps();

            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->foreign('product_id')->references('product_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_dtails');
    }
}
