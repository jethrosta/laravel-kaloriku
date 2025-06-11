<?php
namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Meals
{
    public static function getBrkfastCalories()
    {
        return \App\Models\Breakfast::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->sum('total_calories');
    }

    public static function getLunchCalories()
    {
        return \App\Models\Lunch::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->sum('total_calories');
    }

    public static function getDinnerCalories()
    {
        return \App\Models\Dinner::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->sum('total_calories');
    }

    public static function getYesBrkfastCalories()
    {
        return \App\Models\Breakfast::whereDate('created_at', Carbon::yesterday())->where('user_id', Auth::user()->id)->sum('total_calories');
    }

    public static function getYesLunchCalories()
    {
        return \App\Models\Lunch::whereDate('created_at', Carbon::yesterday())->where('user_id', Auth::user()->id)->sum('total_calories');
    }

    public static function getYesDinnerCalories()
    {
        return \App\Models\Dinner::whereDate('created_at', Carbon::yesterday())->where('user_id', Auth::user()->id)->sum('total_calories');
    }
}

