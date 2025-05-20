<?php

namespace App\Http\Controllers;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\Car\StoreRequest;
use App\Http\Requests\Car\UpdateRequest;
class CarController extends Controller
{
    public function getByBodyType($body_type)
    {
        $cars = Car::where('body_type', $body_type)->get();
        
        if ($cars->isEmpty()) {
            return response()->json([
                'message' => 'Berilgan body_type uchun mashinalar topilmadi.',
                'data' => []
            ], 404);
        }
    
        return response()->json([
            'message' => 'Mashinalar ro‘yxati',
            'data' => CarResource::collection($cars)
        ], 200);
    }

    public function getModels()
    {
        $models = Car::select('model')->distinct()->pluck('model');
        return response()->json([
            'models' => $models,
        ]);
    }
     public function index()
    {
        $cars = Car::all();
        return CarResource::collection($cars);
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
            'data' => $car,
        ]);
    }
}
