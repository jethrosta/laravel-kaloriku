<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AddFood extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['Food_Name'];
    protected $table = 'food';
    protected $guarded=[];

    public function foods()
    {
        return $this->hasMany(FoodTranslation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusAttribute()
    {
        return $this->for_member == 0 ? 'inactive' : 'active';
    }

    public function getAcceptAttribute()
    {
        return $this->add_food == 0 ? 'pending' : 'accept';
    }
}
