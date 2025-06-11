<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercise_categories')->insert([
            ['name' => 'Full-body workout'],
            ['name' => 'Upper/lower split'],
            ['name' => 'Push/pull/legs split'],
            ['name' => 'Muscle group split'],
            ['name' => 'Cardio split'],
            ['name' => 'Body part split']
        ]);
    }
}
