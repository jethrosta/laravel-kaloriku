<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainersTableSeeder extends Seeder
{
    public function run()
    {
        $trainers = [
            [
                'name' => 'Sarah Ahmed',
                'email' => 'sara.ahmed@example.com',
                'phone' => '0112-456-7893',
                'biography' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'profile_picture' => 'image.jpg',
                'availability' => 'Monday to Friday, 9am to 5pm',
                'certifications' => 'Personal Trainer Certification, CPR/AED',
                'compensation' => 50,
                'employment_status' => 'employee'
            ],
            [
                'name' => 'Aya Hosny',
                'email' => 'aya.hosny@example.com',
                'phone' => '0100-654-3210',
                'biography' => 'Ut bibendum placerat lacus quis aliquet.',
                'profile_picture' => 'image.jpg',
                'availability' => 'Monday to Friday, 8am to 4pm',
                'certifications' => 'Personal Trainer Certification, First Aid',
                'compensation' => 40,
                'employment_status' => 'contractor'
            ],
            [
                'name' => 'Heba Gamal',
                'email' => 'heba.gamal@example.com',
                'phone' => '0110-655-3255',
                'biography' => 'Ut bibendum placerat lacus quis aliquet.',
                'profile_picture' => 'image.jpg',
                'availability' => 'Monday to Friday, 8am to 4pm',
                'certifications' => 'Personal Trainer Certification, First Aid',
                'compensation' => 80,
                'employment_status' => 'contractor'
            ],
        ];

        DB::table('trainers')->insert($trainers);
    }
}
