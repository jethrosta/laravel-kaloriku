<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;

class MakananController extends Controller
{
    public function index()
    {
        $makanans = Makanan::all();
        return view('makanans.index', compact('makanans'));
    }

    public function create()
    {
        return view('makanans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required|string|max:100',
            'kalori' => 'required|integer',
            'serving_gram' => 'required|integer',
        ]);

        Makanan::create($request->all());

        return redirect()->route('makanans.index')->with('success', 'Makanan berhasil ditambahkan.');
    }
}
