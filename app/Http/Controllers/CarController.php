<?php

namespace App\Http\Controllers;
use App\Http\Resources\Car\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\Car\StoreRequest;
use App\Http\Requests\Car\UpdateRequest;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return CarResource::collection($cars);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $car = Car::create($data);     
        return CarResource::make($car)->resolve();   
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return CarResource::make($car);
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
    public function update(UpdateRequest $request, Car $car)
    {
        $data = $request->validated();
        $car->update($data);
        return CarResource::make($car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return response()->json([
            'message' => 'Car Deleted',
        ]);
    }
}
