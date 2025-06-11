<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodDairiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_dairies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('breakfast')->unsigned()->nullable();
            $table->bigInteger('lunch')->unsigned()->nullable();
            $table->bigInteger('dinner')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('breakfast')->references('id')->on('food')->onDelete('cascade');
            $table->foreign('lunch')->references('id')->on('food')->onDelete('cascade');
            $table->foreign('dinner')->references('id')->on('food')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_dairies');
    }
}
