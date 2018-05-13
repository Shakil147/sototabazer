<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCetagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cetagories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cetagory_name');
            $table->text('cetagory_description')->nullable();
            $table->string('cetagory_icon')->nullable();
            $table->integer('cetagorie_creater_id')->reference('id')->on('users');
            $table->integer('publication_status')->default('1');
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
        Schema::dropIfExists('cetagories');
    }
}
