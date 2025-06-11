<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseType extends Model
{
    use HasFactory;

    protected $table = 'exercise_types';
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(ExerciseCategory::class,'category_id');
    }
    public function exercises(){
        return $this->hasMany(Exercise::class,'type_id');
    }

    public function getSum($column, $id)
    {
        return $this->exercises()->where('type_id',$id)->sum($column);
    }

    public function getImageAttribute($val)
    {
        return ($val !== null) ? asset('assets/imgs/Exercise/exercise_types/' . $val) : "";

    }
}
