<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Breakfast extends Model
{
    protected $guarded = [];
    protected $table = 'breakfasts';

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
    public function food()
    {
        return $this->belongsTo(AddFood::class, 'food_id');
    }

    public function getAllCalories()
    {
        return $this->whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->sum('total_calories');

    }
}
