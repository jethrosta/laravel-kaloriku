<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\CalorieCalculator;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'welcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_name' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function create(array $data)
{
    if (request('height-unit') == 2) {
        $data['height'] *= 2.54;
    }

    if (request('weight-unit') == 2) {
        $data['weight'] *= 0.453592;
    }

    // Buat user dan simpan ke DB
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'user_name' => $data['user_name'],
        'password' => Hash::make($data['password']),
    ]);

    // Buat dan simpan CalorieCalculator
    $calorieCalculator = new CalorieCalculator([
        'age' => $data['age'],
        'sex' => $data['sex'],
        'weight' => $data['weight'],
        'height' => $data['height'],
        'activity_level' => $data['activity_level'],
        'choose_goal' => $data['gain_loss_amount'],
    ]);

    $result = ($calorieCalculator->sex === 'male') ?
        (88.362 + (13.397 * $calorieCalculator->weight) + (4.799 * $calorieCalculator->height) - (5.677 * $calorieCalculator->age)) * $calorieCalculator->activity_level :
        (447.593 + (9.247 * $calorieCalculator->weight) + (3.098 * $calorieCalculator->height) - (4.33 * $calorieCalculator->age)) * $calorieCalculator->activity_level;

    $carbs = (int) round(($result * 0.4) / 4);
    $protein = (int) round(($result * 0.3) / 4);
    $fat = (int) round(($result * 0.3) / 9);

    $calorieCalculator->cal_result = $result + $calorieCalculator->choose_goal;
    $calorieCalculator->carbohydrates = $carbs;
    $calorieCalculator->protein = $protein;
    $calorieCalculator->fat = $fat;

    $user->calorieCalculator()->save($calorieCalculator);

    // Jangan login dan redirect di sini, biarkan trait yang handle

    return $user;
}

// Tambahkan ini supaya redirect dinamis ke profile user
protected function redirectTo()
{
    return route('welcome');
}

}
