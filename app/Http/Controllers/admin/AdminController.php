<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\MealRequest;
use App\Models\AddFood;
use App\Models\Food;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard');
    }

    public function food()
    {
        $foods = AddFood::select()->orderBy('Food_Name', 'asc')->paginate(10);
        return view('admin.food', compact('foods'));
    }

    public function food_edit($id)
    {
        $foods = AddFood::where('id', $id)->select()->first();
        return view('admin.food-edit', compact('foods'));
    }
    public function nextStep(Request $request)
    {
        $request->validate([
            'food_name' =>'required|string',
            'serving_size' =>'required|numeric|max:10000',
            'servings_per_container' =>'required|numeric|max:10000',
            'calories' =>'required|numeric|max:10000',
            'fat' =>'required|numeric|max:10000',
            'carbs' =>'required|numeric|max:10000',
            'protein' =>'required|numeric|max:10000',
        ]);

        $translations = ['en' => $request->food_name, 'ar' => $request->food_name_ar];

        return response()->json([
            'success' => true,
        ]);
    }

    public function food_details($id)
    {
        $foods = AddFood::where('id', $id)->select()->first();
        return view('admin.food-details', compact('foods'));
    }

    public function create_meals()
    {
        return view('admin.meals.meals-create');
    }
    public function store_meals(MealRequest $request)
    {
        try {

            $meal = new Meal();
            $meal->setTranslation('name', 'en', $request->name);
            $meal->setTranslation('name', 'ar', $request->name_ar);
            $meal->user_id = 1;
            $meal->save();
        return redirect()->route('admin.meals.store');
    } catch (\Exception $e){
            return $e;
        }
    }
}
