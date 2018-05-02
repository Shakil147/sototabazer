<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email',180)->unique();
            $table->string('phone_no',15)->unique();
            $table->string('photo')->nullable();
            $table->string('password');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('up_zilla')->nullable();
            $table->string('zilla');
            $table->string('postcode')->nullable();
            $table->string('country')->default('Bangladesh');
            $table->string('customer_status')->default('0');
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
        Schema::dropIfExists('customers');
    }
}
