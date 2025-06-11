<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'trainers';
    protected $guarded = [];


    public function specializations()
    {
        return $this->belongsToMany(Specialization::class);
    }

    public function getProfilePictureAttribute($value)
    {
        return ($value !== null) ? asset('assets/imgs/trainers/' . $value) : "";
    }
}
