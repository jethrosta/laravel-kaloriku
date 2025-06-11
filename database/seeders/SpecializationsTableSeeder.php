<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializations = [
            [
                'name' => 'Weightlifting',
                'description' => 'Training with weights to build strength and muscle mass',
            ],
            [
                'name' => 'Cardio',
                'description' => 'Aerobic exercise to improve cardiovascular health and endurance',
            ],
            [
                'name' => 'Yoga',
                'description' => 'A mind-body practice that combines physical poses, breathing techniques, and meditation or relaxation',
            ],
            [
                'name' => 'Pilates',
                'description' => 'A low-impact form of exercise that aims to strengthen muscles while improving postural alignment and flexibility',
            ],
            [
                'name' => 'CrossFit',
                'description' => 'A high-intensity fitness program that incorporates elements from several sports and types of exercise',
            ],
            [
                'name' => 'Nutrition',
                'description' => 'The study of food and its relationship to health, with a focus on how to make informed dietary choices',
            ],
        ];

        DB::table('specializations')->insert($specializations);
    }
}
