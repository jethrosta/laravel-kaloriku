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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('Food_Name');
            $table->float('serving_size');
            $table->float('servings_per_container');
            $table->float('calories');
            $table->float('total_fat');
            $table->float('saturated');
            $table->float('polyunsaturated');
            $table->float('monounsaturated');
            $table->float('trans');
            $table->float('cholesterol');
            $table->float('sodium');
            $table->float('potassium');
            $table->float('total_carbs');
            $table->float('dietary_fiber');
            $table->float('sugars');
            $table->float('protein');
            $table->float('vitamin_a');
            $table->float('vitamin_c');
            $table->float('calcium');
            $table->float('iron');
            $table->enum('add_food', ['0','1'])->default('0');
            $table->enum('for_member', ['0','1'])->default('1');
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
        Schema::dropIfExists('food');
    }
};
