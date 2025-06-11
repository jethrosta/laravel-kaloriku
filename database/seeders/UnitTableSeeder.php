<?php
namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->delete();

        Unit::create([
            'id' => 1,
            'unit_name'=>'Gram',
            'abbr'=>'g',
            'value'=>1,
        ]);

        Unit::create([
            'id' => 2,
            'unit_name'=>'Kilogram',
            'abbr'=>'kg',
            'value'=>1000,
        ]);
    }
}
