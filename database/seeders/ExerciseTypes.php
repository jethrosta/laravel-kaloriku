<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercise_types')->insert([
            ['name' => 'Upper body', 'category_id' => 1],
            ['name' => 'Lower body', 'category_id' => 1],
            ['name' => 'Core', 'category_id' => 1],
            ['name' => 'Upper body', 'category_id' => 2],
            ['name' => 'Lower body', 'category_id' => 2],
            ['name' => 'Push', 'category_id' => 3],
            ['name' => 'Pull', 'category_id' => 3],
            ['name' => 'Leg', 'category_id' => 3],
            ['name' => 'Chest and triceps', 'category_id' => 4],
            ['name' => 'Back and biceps', 'category_id' => 4],
            ['name' => 'Shoulders and abs', 'category_id' => 4],
            ['name' => 'Legs', 'category_id' => 4],
            ['name' => 'High-intensity interval training (HIIT)', 'category_id' => 5],
            ['name' => 'Low-impact cardio', 'category_id' => 5],
            ['name' => 'Endurance cardio', 'category_id' => 5],
            ['name' => 'Active recovery', 'category_id' => 5],
            ['name' => 'Chest and triceps', 'category_id' => 6],
            ['name' => 'Back and biceps', 'category_id' => 6],
            ['name' => 'Shoulders and traps', 'category_id' => 6],
            ['name' => 'Legs', 'category_id' => 6],
            ['name' => 'Abs', 'category_id' => 6],
        ]);
    }
}
