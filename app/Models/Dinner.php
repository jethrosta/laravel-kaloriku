<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinner extends Model
{
    protected $guarded = [];
    protected $table = 'dinners';

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
    public function food()
    {
        return $this->belongsTo(AddFood::class, 'food_id');
    }
}
