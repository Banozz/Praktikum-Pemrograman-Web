<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'carName' => 'LC500',
            'brandName' => 'Lexus', 
            'carPrice' => 100000.00
        ]);

        Car::factory()
            ->count(5)
            ->create();
    }
}
