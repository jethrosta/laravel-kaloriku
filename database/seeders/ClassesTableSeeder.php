<?php

namespace Database\Seeders;

use App\Models\admin\FitnessClass;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'name' => 'Fitness Class',
                'description' => 'A high-intensity cardio and strength workout that targets all major muscle groups.',
                'image' => 'fitness.jpg',
                'day1' => 'monday',
                'day1_time' => '10:00AM - 11:30AM',
                'day2' => 'tuesday',
                'day2_time' => '2:00PM - 3:30PM',
                'trainer_id' => 1,
            ],
            [
                'name' => 'Muscle Training',
                'description' => 'A weightlifting program designed to build muscle mass and strength.',
                'image' => 'muscle.jpg',
                'day1' => 'friday',
                'day1_time' => '10:00AM - 11:30AM',
                'day2' => 'thursday',
                'day2_time' => '2:00PM - 3:30PM',
                'trainer_id' => 2,
            ],
            [
                'name' => 'Body Building',
                'description' => 'An advanced weightlifting program focused on building a well-defined, muscular physique.',
                'image' => 'bodybuilding.jpg',
                'day1' => 'tuesday',
                'day1_time' => '10:00AM - 11:30AM',
                'day2' => 'monday',
                'day2_time' => '2:00PM - 3:30PM',
                'trainer_id' => 3,
            ],
            ];
        foreach ($classes as $class) {
            FitnessClass::create($class);
        }
    }
}
