<?php
namespace Database\Seeders;

use App\Models\FoodTranslation;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_translations')->delete();

        FoodTranslation::create([
            'id' => 1,
            'food_id'=>1,
            'locale'=>'ar',
            'Food_Name'=>'موزة',
        ]);
        FoodTranslation::create([
            'id' => 2,
            'food_id'=>2,
            'locale'=>'ar',
            'Food_Name'=>'أرز',
        ]);
        FoodTranslation::create([
            'id' => 3,
            'food_id'=>3,
            'locale'=>'ar',
            'Food_Name'=>'زبادي',
        ]);
    }
}
