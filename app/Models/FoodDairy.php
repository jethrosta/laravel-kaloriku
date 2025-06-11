<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodDairy extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function foods()
    {
        return $this->belongsTo(AddFood::class, 'breakfast');
    }

    public function lunchs()
    {
        return $this->belongsTo(AddFood::class, 'lunch');
    }

    public function dinners()
    {
        return $this->belongsTo(AddFood::class, 'dinner');
    }

}
