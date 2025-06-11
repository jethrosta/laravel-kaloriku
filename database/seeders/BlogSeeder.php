<?php

namespace Database\Seeders;

use App\Models\BlogCategoy;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->delete();
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $category = $faker->randomElement(['fitness', 'workout', 'healthy food']);
            $data = [
                'title' => $faker->sentence,
                'slug' => Str::slug($faker->sentence),
                'body' => $faker->text(600),
                'image' => $faker->imageUrl(),
                'category_id' => BlogCategoy::where('name', $category)->first()->id,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ];
            DB::table('blogs')->insert($data);
        }
    }
}
