<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->delete();

        DB::table('exercises')->insert([
            ['name' => 'Chest press', 'image' => 'chest_press.gif', 'slug' => Str::slug('Chest press'), 'counter' => 30, 'type_id' => 1, 'MET' => 4.0],
            ['name' => 'Pull ups or pull downs', 'image' => 'pull_ups.gif', 'slug' => Str::slug('Pull ups or pull downs'), 'counter' => 30, 'type_id' => 1, 'MET' => 8.0],
            ['name' => 'Shoulder press', 'image' => 'shoulder_press.gif', 'slug' => Str::slug('Shoulder press'), 'counter' => 30, 'type_id' => 1, 'MET' => 4.0],
            ['name' => 'Bicep curls', 'image' => 'bicep_curls.gif', 'slug' => Str::slug('Bicep curls'), 'counter' => 30, 'type_id' => 1, 'MET' => 3.5],
            ['name' => 'Tricep dips', 'image' => 'tricep_dips.gif', 'slug' => Str::slug('Tricep dips'), 'counter' => 30, 'type_id' => 1, 'MET' => 3.5],

            ['name' => 'Squats', 'image' => 'squats.gif', 'slug' => Str::slug('Squats'), 'counter' => 30, 'type_id' => 2, 'MET' => 5.0],
            ['name' => 'Deadlifts', 'image' => 'deadlifts.gif', 'slug' => Str::slug('Deadlifts'), 'counter' => 30, 'type_id' => 2, 'MET' => 5.5],
            ['name' => 'Lunges', 'image' => 'lunges.gif', 'slug' => Str::slug('Lunges'), 'counter' => 30, 'type_id' => 2, 'MET' => 4.0],
            ['name' => 'Leg press', 'image' => 'leg_press.gif', 'slug' => Str::slug('Leg press'), 'counter' => 30, 'type_id' => 2, 'MET' => 4.0],
            ['name' => 'Leg curl', 'image' => 'leg_curl.gif', 'slug' => Str::slug('Leg curl'), 'counter' => 30, 'type_id' => 2, 'MET' => 3.5],
            ['name' => 'Leg extension', 'image' => 'leg_extension.gif', 'slug' => Str::slug('Leg extension'), 'counter' => 30, 'type_id' => 2, 'MET' => 3.5],

            ['name' => 'Planks', 'image' => 'planks.gif', 'slug' => Str::slug('Planks'), 'counter' => 30, 'type_id' => 3, 'MET' => 3.0],
            ['name' => 'Russian Twist', 'image' => 'russian_twist.gif', 'slug' => Str::slug('Russian Twist'), 'counter' => 30, 'type_id' => 3, 'MET' => 4.5],
            ['name' => 'Leg raise', 'image' => 'leg_raise.gif', 'slug' => Str::slug('Leg raise'), 'counter' => 30, 'type_id' => 3, 'MET' => 3.0],
            ['name' => 'Scissor kick', 'image' => 'scissor_Kick.gif', 'slug' => Str::slug('Scissor kick'), 'counter' => 30, 'type_id' => 3, 'MET' => 3.0],
            ['name' => 'Crunch', 'image' => 'crunch.gif', 'slug' => Str::slug('Crunch'), 'counter' => 30, 'type_id' => 3, 'MET' => 2.5],
            ['name' => 'Reverse crunch', 'image' => 'reverse_crunch.gif', 'slug' => Str::slug('Reverse crunch'), 'counter' => 30, 'type_id' => 3, 'MET' => 2.5],

            ['name' => 'Chest press', 'image' => 'chest_press.gif', 'slug' => Str::slug('Chest press'), 'counter' => 30, 'type_id' => 4, 'MET' => 4.0],
            ['name' => 'Pull ups or pull downs', 'image' => 'pull_ups.gif', 'slug' => Str::slug('Pull ups or pull downs'), 'counter' => 30, 'type_id' => 4, 'MET' => 8.0],
            ['name' => 'Shoulder press', 'image' => 'shoulder_press.gif', 'slug' => Str::slug('Shoulder press'), 'counter' => 30, 'type_id' => 4, 'MET' => 4.0],
            ['name' => 'Bicep curls', 'image' => 'bicep_curls.gif', 'slug' => Str::slug('Bicep curls'), 'counter' => 30, 'type_id' => 4, 'MET' => 3.5],
            ['name' => 'Tricep dips', 'image' => 'tricep_dips.gif', 'slug' => Str::slug('Tricep dips'), 'counter' => 30, 'type_id' => 4, 'MET' => 4.5],

            ['name' => 'Squats', 'image' => 'squats.gif', 'slug' => Str::slug('Squats'), 'counter' => 30, 'type_id' => 5, 'MET' => 5.0],
            ['name' => 'Deadlifts', 'image' => 'deadlifts.gif', 'slug' => Str::slug('Deadlifts'), 'counter' => 30, 'type_id' => 5, 'MET' => 5.5],
            ['name' => 'Lunges', 'image' => 'lunges.gif', 'slug' => Str::slug('Lunges'), 'counter' => 30, 'type_id' => 5, 'MET' => 4.0],
            ['name' => 'Leg press', 'image' => 'leg_press.gif', 'slug' => Str::slug('Leg press'), 'counter' => 30, 'type_id' => 5, 'MET' => 4.0],
            ['name' => 'Leg curl', 'image' => 'leg_curl.gif', 'slug' => Str::slug('Leg curl'), 'counter' => 30, 'type_id' => 5, 'MET' => 3.5],
            ['name' => 'Leg extension', 'image' => 'leg_extension.gif', 'slug' => Str::slug('Leg extension'), 'counter' => 30, 'type_id' => 5, 'MET' => 3.5],

            ['name' => 'Chest press', 'image' => 'chest_press.gif', 'slug' => Str::slug('Chest press'), 'counter' => 30, 'type_id' => 6,  'MET' =>4.0],
            ['name' => 'Shoulder press', 'image' => 'shoulder_press.gif', 'slug' => Str::slug('Shoulder press'), 'counter' => 30, 'type_id' => 6, 'MET' => 4.0],
            ['name' => 'Tricep dips', 'image' => 'tricep_dips.gif', 'slug' => Str::slug('Tricep dips'), 'counter' => 30, 'type_id' => 6, 'MET' => 3.5],

            ['name' => 'Pull ups or pull downs', 'image' => 'pull_ups.gif', 'slug' => Str::slug('Pull ups or pull downs'), 'counter' => 30, 'type_id' => 7, 'MET' =>8.0],
            ['name' => 'Row', 'image' => 'row.gif', 'slug' => Str::slug('Row'), 'counter' => 30, 'type_id' => 7, 'MET' => 4.0],
            ['name' => 'Bicep curls', 'image' => 'bicep_curls.gif', 'slug' => Str::slug('Bicep curls'), 'counter' => 30, 'type_id' => 7, 'MET' =>  3.5],

            ['name' => 'Squats', 'image' => 'squats.gif', 'slug' => Str::slug('Squats'), 'counter' => 30, 'type_id' => 8, 'MET' => 5.0],
            ['name' => 'Deadlifts', 'image' => 'deadlifts.gif', 'slug' => Str::slug('Deadlifts'), 'counter' => 30, 'type_id' => 8, 'MET' => 5.5],
            ['name' => 'Lunges', 'image' => 'lunges.gif', 'slug' => Str::slug('Lunges'), 'counter' => 30, 'type_id' => 8, 'MET' => 4.0],
            ['name' => 'Leg press', 'image' => 'leg_press.gif', 'slug' => Str::slug('Leg press'), 'counter' => 30, 'type_id' => 8, 'MET' =>  4.0],
            ['name' => 'Leg curl', 'image' => 'leg_curl.gif', 'slug' => Str::slug('Leg curl'), 'counter' => 30, 'type_id' => 8, 'MET' => 3.5],
            ['name' => 'Leg extension', 'image' => 'leg_extension.gif', 'slug' => Str::slug('Leg extension'), 'counter' => 30, 'type_id' => 8, 'MET' => 3.5],
            ]);
    }
}
