<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodTranslation extends Model
{
    protected $table = 'food_translations';
    protected $fillable = ['Food_Name'];
    public  $timestamps = false;

    public function foods()
    {
        return $this->belongsTo(AddFood::class);
    }
}
