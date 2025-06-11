<?php

namespace App\Http\Livewire;

use App\Models\AddFood;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddfoodComponent extends Component
{

    public $successMessage = '';
    public $catchError;
    public $currentStep = 1,



        // Food_Info
        $food_name, $food_name_ar, $serving_size, $servings_per_container, $calories,
        $fat, $carbs, $protein,

        // Main Food Info
        $saturated, $polyunsaturated, $monounsaturated, $trans, $cholesterol,
        $sugars, $sodium, $potassium, $dietary_fiber, $vitamin_a, $vitamin_c,
        $calcium, $iron, $for_member;

    public $products = [];


    public function updated($propertyName)

    {

        $this->validateOnly($propertyName,[
            'food_name' =>'required|string',
        ]);

    }


    public function render()
    {
        return view('livewire.addfood-component');
    }

    /*
     * $food_name, $serving_size, $servings_per_container, $calories,
        $fat, $carbs, $protein,*/
    //firstStepSubmit
    public function firstStepSubmit()
    {
        $this->validate([
            'food_name' =>'required|string',
            'serving_size' =>'required|numeric|max:10000',
            'servings_per_container' =>'required|numeric|max:10000',
            'calories' =>'required|numeric|max:10000',
            'fat' =>'required|numeric|max:10000',
            'carbs' =>'required|numeric|max:10000',
            'protein' =>'required|numeric|max:10000',
        ]);
        $this->currentStep = 2;
    }

    //secondStepSubmit
    public function secondStepSubmit()
    {
        $this->currentStep = 3;
    }

    public function submitFood()
    {
        $translations = ['en' => $this->food_name, 'ar' => $this->food_name_ar];
        try {

            $My_Food = new AddFood();
            // Food_Info
            $My_Food->Food_Name = $translations;
            $My_Food->serving_size = $this->serving_size;
            $My_Food->servings_per_container = $this->servings_per_container;
            $My_Food->calories = $this->calories;
            $My_Food->total_fat = $this->fat;
            $My_Food->total_carbs = $this->carbs;
            $My_Food->protein = $this->protein;
            $My_Food->user_id = Auth::user()->id;


            $My_Food->saturated = $this->saturated;
            $My_Food->polyunsaturated = $this->polyunsaturated;
            $My_Food->monounsaturated = $this->monounsaturated;
            $My_Food->trans = $this->trans;
            $My_Food->cholesterol = $this->cholesterol;
            $My_Food->sugars = $this->sugars;
            $My_Food->sodium = $this->sodium;
            $My_Food->potassium = $this->potassium;
            $My_Food->dietary_fiber = $this->dietary_fiber;
            $My_Food->vitamin_a = $this->vitamin_a;
            $My_Food->vitamin_c = $this->vitamin_c;
            $My_Food->calcium = $this->calcium;
            $My_Food->iron = $this->iron;
            $My_Food->for_member = $this->for_member;

            // Main Food Info

            $My_Food->save();
            $this->successMessage = trans('messages.success_form');
            $this->currentStep = 1;
            $this->clearFoodForm();
        }catch (\Exception $e) {
        $this->catchError = $e->getMessage();
    }
 }

 public function clearFoodForm()
 {
      $this->food_name = '';
      $this->food_name_ar = '';
       $this->serving_size = '';
       $this->servings_per_container = '';
       $this->calories = '';
       $this->fat = '';
       $this->carbs = '';
       $this->protein = '';

       $this->saturated  = '';
       $this->polyunsaturated = '';
       $this->monounsaturated = '';
       $this->trans = '';
       $this->cholesterol = '';
       $this->sugars = '';
       $this->sodium = '';
       $this->potassium = '';
       $this->dietary_fiber = '';
       $this->vitamin_a = '';
       $this->vitamin_c = '';
       $this->calcium = '';
       $this->iron = '';
       $this->for_member = '';
 }




    //back
    public function back($step)
    {
        $this->currentStep = $step;
    }

}
