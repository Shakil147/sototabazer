<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('product_name');
            $table->integer('category_id')->reference('id')->on('cetagories');
            $table->integer('brand_id')->reference('id')->on('brands');
            $table->float('reguler_price', 10,2);
            $table->float('product_price', 10,2);
            $table->integer('product_quantity');
            $table->string('product_size');
            $table->text('product_short_description');
            $table->text('product_long_description');
            $table->string('product_main_image');
            $table->integer('product_creater_id')->reference('id')->on('users');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('products');
    }
}
