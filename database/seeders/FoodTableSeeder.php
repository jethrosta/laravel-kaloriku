<?php
namespace Database\Seeders;

use App\Models\AddFood;
use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('food')->delete();

        $foods = [
            [
                'Food_Name' => ['en' => 'Banana', 'ar' => 'موزة'],
                'serving_size'=>100,
                'servings_per_container'=>1,
                'calories'=>88,
                'total_fat'=>0.3,
                'total_carbs'=>23,
                'protein'=>1.1,
                'add_food'=>1,
                'user_id'=>1,
            ],
            [
                'Food_Name'=>['en' => 'Rice', 'ar' => 'أرز'],
                'serving_size'=>100,
                'servings_per_container'=>1,
                'calories'=>130,
                'total_fat'=>0.3,
                'total_carbs'=>28,
                'protein'=>2.7,
                'add_food'=>1,
                'user_id'=>1,
            ],
            [
                'Food_Name' => ['en' => 'Yogurt', 'ar' => 'زبادي'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 58,
                'total_fat' => 0.4,
                'total_carbs' => 3.6,
                'protein' => 10,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Egg', 'ar' => 'بيضة'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 70,
                'total_fat' => 5,
                'total_carbs' => 0.6,
                'protein' => 6,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Apple', 'ar' => 'تفاحة'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 52,
                'total_fat' => 0.3,
                'total_carbs' => 14,
                'protein' => 0.5,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Orange', 'ar' => 'برتقالة'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 62,
                'total_fat' => 0.2,
                'total_carbs' => 15.4,
                'protein' => 1.2,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Steak', 'ar' => 'لحم بقري'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 250,
                'total_fat' => 15,
                'total_carbs' => 3,
                'protein' => 25,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Tuna Steak', 'ar' => 'لحم التونة'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 200,
                'total_fat' => 12,
                'total_carbs' => 0,
                'protein' => 20,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Fish', 'ar' => 'شعاعيات'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 150,
                'total_fat' => 8,
                'total_carbs' => 0,
                'protein' => 15,
                'add_food' => 1,
                'user_id' => 1
            ],

            [
                'Food_Name' => ['en' => 'Salad', 'ar' => 'سلطة'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 50,
                'total_fat' => 2,
                'total_carbs' => 5,
                'protein' => 2,
                'add_food' => 1,
                'user_id' => 1
            ],
        [
            'Food_Name' => ['en' => 'Sandwich', 'ar' => 'ساندويش'],
            'serving_size' => 100,
            'servings_per_container' => 1,
            'calories' => 300,
            'total_fat' => 15,
            'total_carbs' => 35,
            'protein' => 12,
            'add_food' => 1,
            'user_id' => 1
        ],
        [
            'Food_Name' => ['en' => 'Bread', 'ar' => 'خبز'],
            'serving_size' => 100,
            'servings_per_container' => 1,
            'calories' => 150,
            'total_fat' => 2,
            'total_carbs' => 30,
            'protein' => 5,
            'add_food' => 1,
            'user_id' => 1
        ],
        [
            'Food_Name' => ['en' => 'Steak', 'ar' => 'لحم بقري'],
            'serving_size' => 100,
            'servings_per_container' => 1,
            'calories' => 250,
            'total_fat' => 15,
            'total_carbs' => 3,
            'protein' => 25,
            'add_food' => 1,
            'user_id' => 1
        ],
            [
                'Food_Name' => ['en' => 'Spinach', 'ar' => 'سبانخ'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 23,
                'total_fat' => 0.4,
                'total_carbs' => 3.6,
                'protein' => 2.9,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Carrots', 'ar' => 'جزر'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 41,
                'total_fat' => 0.2,
                'total_carbs' => 10,
                'protein' => 0.9,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Pizza', 'ar' => 'بيتزا'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 300,
                'total_fat' => 12,
                'total_carbs' => 40,
                'protein' => 12,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Hamburger', 'ar' => 'هامبرغر'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 400,
                'total_fat' => 20,
                'total_carbs' => 40,
                'protein' => 20,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Hotdog', 'ar' => 'هوتدوغ'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 200,
                'total_fat' => 12,
                'total_carbs' => 20,
                'protein' => 8,
                'add_food' => 1,
                'user_id' => 1
            ],
            [
                'Food_Name' => ['en' => 'Soup', 'ar' => 'شوربة'],
                'serving_size' => 100,
                'servings_per_container' => 1,
                'calories' => 100,
                'total_fat' => 5,
                'total_carbs' => 10,
                'protein' => 5,
                'add_food' => 1,
                'user_id' => 1
            ],
        ];

        foreach ($foods as $food) {
            AddFood::create($food);
        }

    }
}
