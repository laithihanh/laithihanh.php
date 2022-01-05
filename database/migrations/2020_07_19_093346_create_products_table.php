<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('name')->unique();
            $table->integer('cate_id')->unsigned();
            $table->float('price',8,2);
            $table->float('sale_price',8,2);
            $table->string('images');
            $table->text('description');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('cate_id')->references('cate_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
