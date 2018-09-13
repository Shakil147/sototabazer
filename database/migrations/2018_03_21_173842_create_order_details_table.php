<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->reference('id')->on('orders');
            $table->integer('customer_id')->reference('id')->on('customers');
            $table->integer('product_id')->reference('id')->on('products');
            $table->integer('brand_id')->reference('id')->on('brands');
            $table->string('product_name');
            $table->float('product_price');
            $table->integer('product_quantity');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
