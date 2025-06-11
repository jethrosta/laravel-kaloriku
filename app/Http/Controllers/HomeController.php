<?php

namespace App\Http\Controllers;

use App\Models\AddFood;
use App\Models\CalorieCalculator;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.blade.php.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $period = CarbonPeriod::create('2018-05-14', '2018-06-20');
        $dates = $period->toArray();
        $count = count($dates);
        $foods = AddFood::select()->paginate(2);
        return view('home', compact('period', 'foods'));
    }
}
