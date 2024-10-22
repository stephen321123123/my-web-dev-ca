<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        Car::insert([
            [
                'title' => 'Passat', 
                'price' => 5000, 
                'release year' => 1973, 
                'engine size' => 1.6, 
                'transmission type' => 'manual', 
                'colour' => 'black', 
                'registration year' => 2011, 
                'created_at' => $currentTimestamp, 
                'updated_at' => $currentTimestamp
            ]
        ]);
    }
}
