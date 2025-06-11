<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
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
        $table->float('total_carbs');
        $table->float('protein');
        $table->float('saturated')->nullable();
        $table->float('polyunsaturated')->nullable();
        $table->float('monounsaturated')->nullable();
        $table->float('trans')->nullable();
        $table->float('cholesterol')->nullable();
        $table->float('sodium')->nullable();
        $table->float('potassium')->nullable();
        $table->float('dietary_fiber')->nullable();
        $table->float('sugars')->nullable();
        $table->float('vitamin_a')->nullable();
        $table->float('vitamin_c')->nullable();
        $table->float('calcium')->nullable();
        $table->float('iron')->nullable();
        $table->enum('add_food', ['0','1'])->default('0');
        $table->enum('for_member', ['0','1'])->default('1');
        $table->bigInteger('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        //
    }
}
