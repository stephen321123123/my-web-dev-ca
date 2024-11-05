<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all(); //fetch all cars
        return view('cars.index', compact('cars')); //returns with a view of the cars
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request ->validate([
            'title'=> 'required',
            'price' => 'required |decimal',
            'release_year' => 'required|integer',
            'engine_size' => 'required|decimal',
            'transmission_type' => 'required',
            'colour' => 'required',
            'registration_year' => 'required|integer',
        ]);
            
            //  Check if the image is uploaded and handle it
            if ($request->hasFile ('image')) {
            $imageName = time().'.'.$request->image->extension();
            request->image->move(public_path( 'images/cars'), $imageName);
            }

            // Create a book record in the database
            Car::create([
            'title'=> $request->title,
            'price' => $request->price, 
            'release_year' => $request->release_year,
            'engine_size' => $request->engine_size,
            'transmission_type' => $request->transmission_type,
            'colour' => $request->colour,
            'registration_year' => $request->registration_year,
            'created_at' => now(),
            'updated_at' => now()
            ]);

            
            //Redirect to the index page with a success message

            return to_route('cars.index') ->with('success', 'Car created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('cars.show')->with('car', $car); //fetches selected book and passes it to view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
