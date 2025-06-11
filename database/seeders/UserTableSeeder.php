<?php
namespace Database\Seeders;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'id' => 1,
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>'12345678',
            'user_name'=>'admin',
        ]);
    }
}
