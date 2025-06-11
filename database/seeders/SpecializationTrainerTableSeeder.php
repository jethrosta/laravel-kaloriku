<?php

namespace Database\Seeders;

use App\Models\admin\Specialization;
use App\Models\admin\Trainer;
use Illuminate\Database\Seeder;

class SpecializationTrainerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializations = Specialization::all();
        $trainers = Trainer::all();

        foreach ($trainers as $trainer) {
            $trainer->specializations()->attach($specializations->random(3));
        }
    }
}
