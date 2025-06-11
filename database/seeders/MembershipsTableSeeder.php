<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Seeder;

class MembershipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [    'unlimited_access' => true,];

        Membership::create([
            'name' => 'Standard',
            'description' => 'Unlimited access to the gym',
            'price' => 500,
            'features' => json_encode(array_merge($features, [
                'classes_per_week' => 3,
                'free_personal_training' => 3,
                'free_drinking_package' => false,
            ]))
        ]);

        Membership::create([
            'name' => 'Premium',
            'description' => 'Unlimited access to the gym + 7 classes per week + 7 Free personal training',
            'price' => 1000,
            'duration' => 12,
            'features' => json_encode(array_merge($features, [
                'classes_per_week' => 5,
                'free_personal_training' => 3,
                'free_drinking_package' => true,
            ])),
            'fixed_discount' => 50,
            'discount_name' => 'Early Bird Discount',
        ]);

        Membership::create([
            'name' => 'VIP',
            'description' => 'Unlimited access to the gym + 7 classes per week + One Year memberships + FREE drinking package + 7 Free personal training',
            'price' => 2000,
            'duration' => 12,
            'features' => json_encode(array_merge($features, [
                'classes_per_week' => 7,
                'free_personal_training' => 5,
                'free_drinking_package' => true,
            ])),
            'percent_discount' => 10,
            'discount_name' => 'Summer Sale',
        ]);

    }
}
