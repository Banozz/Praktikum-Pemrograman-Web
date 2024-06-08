<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'carName' => 'required|string|max:255',
            'brandName' => 'required|string|max:255',
            'carPrice' => 'required|numeric',
        ]);

        Car::create($validated);

        return redirect()->route('home');
    }
}
