<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    public function getImageAttribute($val)
    {
        return ($val !== null) ? asset('assets/imgs/Exercise/all/' . $val) : "";
    }
}
