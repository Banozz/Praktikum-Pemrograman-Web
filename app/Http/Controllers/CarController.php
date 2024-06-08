<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $car = Car::all();
        return view('home', compact('car'));
    }

    /**
     * 
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     *
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'carName' => 'required|string|max:255',
            'brandName' => 'required|string|max:255',
            'carPrice' => 'required|numeric',
        ]);

        Car::create($validated);

        return redirect()->route('car.index')->with('success', 'Car Created Successfully.');
    }

    /**
     * 
     */
    public function show(string $id)
    {
        //
    }

    /**
     * 
     */
    public function edit(Car $car)
    {   
        return view('car.edit', compact('car'));
    }

    /**
     * 
     */
    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'carName' => 'required|string|max:255',
            'brandName' => 'required|string|max:255',
            'carPrice' => 'required|numeric',
        ]);

        $car->update();

        return redirect()->route('car.index')->with('success', 'Car Updated Successfully.');;
    }

    /**
     * 
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('car.index')->with('success', 'Car Deleted Successfully.');
    }
}
