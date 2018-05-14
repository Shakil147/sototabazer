<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->foreign('customer_id')->reference('id')->on('customers');
            $table->string('full_name');
            $table->string('lastName');
            $table->string('email')->nullable();
            $table->string('phone_no');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('up_zilla');
            $table->string('zilla');
            $table->string('postcode')->nullable();
            $table->string('country')->default('Bangladesh');
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
        Schema::dropIfExists('shippings');
    }
}

            