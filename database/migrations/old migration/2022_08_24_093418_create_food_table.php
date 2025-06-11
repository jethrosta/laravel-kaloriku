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
            $table->string('food-name');
            $table->float('serving-Size');
            $table->float('servings-per-container');
            $table->float('calories');
            $table->float('total-fat');
            $table->float('saturated');
            $table->float('polyunsaturated');
            $table->float('monounsaturated');
            $table->float('trans');
            $table->float('cholesterol');
            $table->float('sodium');
            $table->float('potassium');
            $table->float('total-carbs');
            $table->float('dietary Fiber');
            $table->float('sugars');
            $table->float('protein');
            $table->float('vitamin-a');
            $table->float('vitamin-c');
            $table->float('calcium');
            $table->float('iron');
            $table->enum('add-food', ['0','1']);
            $table->enum('for-member', ['0','1']);
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
