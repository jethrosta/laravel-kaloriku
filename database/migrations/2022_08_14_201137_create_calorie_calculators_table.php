<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calorie_calculators', function (Blueprint $table) {
            $table->id();
            $table->float('age');
            $table->enum('sex', ['male', 'female'])->default('female');
            $table->float('weight');
            $table->float('height');
            $table->integer('activity_level');
            $table->integer('choose_goal');
            $table->float('protein');
            $table->float('fat');
            $table->float('carbohydrates');
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
        Schema::dropIfExists('calorie_calculators');
    }
};
