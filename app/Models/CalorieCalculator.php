<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalorieCalculator extends Model
{
    protected $table = "calorie_calculators";
    protected $guarded = [];

    public function getActivityLevel()
    {
         if ($this->activity_level == 1.2){
             return 'Little to no exercise';
         }else if ($this->activity_level == 1.375){
             return 'Light exercise (1−3 days per week)';
         }else if ($this->activity_level == 1.55){
             return 'Moderate exercise (3−5 days per week)';
         }else if ($this->activity_level == 1.725){
             return 'Heavy exercise (6−7 days per week)';
         }else if ($this->activity_level == 1.9){
             return 'Very heavy exercise (twice per day, extra heavy workouts)';
         }
    }

    public function getChooseGoal()
    {
        if ($this->choose_goal == -1000){
            return 'Lose 2 Pounds per Week';
        }else if ($this->choose_goal == -750){
            return 'Lose 1.5 Pounds per Week';
        }else if ($this->choose_goal == -500){
            return 'Lose 1 Pounds per Week';
        }else if ($this->choose_goal == -250){
            return 'Lose 0.5 Pounds per Week';
        }else if ($this->choose_goal == 0){
            return 'Stay the Same Weight';
        }else if ($this->choose_goal ==1000){
            return 'Gain 2 Pounds per Week';
        }else if ($this->choose_goal ==750){
            return 'Gain 1.5 Pounds per Week';
        }else if ($this->choose_goal ==500){
            return 'Gain 1 Pounds per Week';
        }else if ($this->choose_goal ==250){
            return 'Gain 0.5 Pounds per Week';
        }
    }
}
