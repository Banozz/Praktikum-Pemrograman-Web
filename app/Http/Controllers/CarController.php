<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car = Car::all();
        return view('home', compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {   
        return view('car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('car.index')->with('success', 'Car Deleted Successfully.');
    }
}
