<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BlogCategoy;
use App\Models\FoodTranslation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//         $this->call(CountryTableSeeder::class);
        //$this->call(UserTableSeeder::class);
          $this->call(FoodTableSeeder::class);
//        $this->call(FoodTranslationTableSeeder::class);
//        $this->call(UnitTableSeeder::class);
//        $this->call(ExerciseSeeder::class);
//        $this->call(ExerciseTypes::class);
//        $this->call(BlogCategorySeeder::class);
//        $this->call(BlogSeeder::class);

//        $this->call(RolesAndPermissionsSeeder::class);

    }
}
