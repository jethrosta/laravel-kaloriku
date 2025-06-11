<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Meal extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['name'];
    protected $table = 'meals';
    protected $fillable = ['name', 'user_id'];
}
