<?php

namespace App\Http\Controllers;

use App\Models\CalorieCalculator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Makanan;

class CalorieCalculatorController extends Controller
{
    public function index()
    {
        $calories = CalorieCalculator::all();
        return view('calories', compact('calories'));
    }

    public function store(Request $request)
    {
        $data = [
            'age' => $request->age,
            'sex' => $request->sex,
            'weight' => $request->weight,
            'height' => $request->inches,
            'activity_level' => $request->activity_level,
            'choose_goal' => $request->gain_loss_amount,
            'cal_result' => $request->cal_result,
            'protein' => $request->protein,
            'fat' => $request->fat,
            'carbohydrates' => $request->carbs,
            'user_id' => Auth::user()->id
        ];

        CalorieCalculator::updateOrCreate(
            ['user_id' => Auth::user()->id],
            $data
        );

        return redirect()->route('home');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        try {
            $image = $request->file('image');
            $imagePath = $image->getPathname();
            $imageName = $image->getClientOriginalName();

            // Kirim ke FastAPI
            $response = Http::attach(
                'image', file_get_contents($imagePath), $imageName
            )->post('http://127.0.0.1:8000/detect_food');

            $result = $response->json();

            if (isset($result['detected_food'])) {
                $makanan = Makanan::where('nama_makanan', 'like', '%' . $result['detected_food'] . '%')->first();

                if ($makanan) {
                    session()->flash('hasil', [
                        'nama' => $makanan->nama_makanan,
                        'kalori' => $makanan->kalori,
                        'serving' => $makanan->serving_gram
                    ]);
                } else {
                    session()->flash('hasil', [
                        'nama' => $result['detected_food'],
                        'kalori' => $result['estimated_calories_kcal'],
                        'serving' => 'N/A'
                    ]);
                }
            } else {
                session()->flash('error', 'Gagal mendeteksi makanan.');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->back();
    }
}
