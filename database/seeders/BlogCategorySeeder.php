<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_categories')->delete();
        $categories = [
            ['name' => 'Fitness'],
            ['name' => 'Workout'],
            ['name' => 'Healthy Food']
        ];
        foreach ($categories as $category) {
            $data = [
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'created_at' => now(),
                'updated_at' => now()
            ];
            DB::table('blog_categories')->insert($data);
        }
    }
}
