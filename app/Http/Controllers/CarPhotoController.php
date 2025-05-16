<?php

namespace App\Http\Controllers;
use App\Http\Resources\CarPhoto\CarPhotoResource;
use App\Models\CarPhoto;
use Illuminate\Http\Request;
use App\Http\Requests\CarPhoto\StoreRequest;
use App\Http\Requests\CarPhoto\UpdateRequest;
class CarPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = CarPhoto::all();
        return CarPhotoResource::collection($cars);
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
        $car = CarPhoto::create($data);     
        return CarPhotoResource::make($car)->resolve();   
    }

    /**
     * Display the specified resource.
     */
    public function show(CarPhoto $car)
    {
        return CarPhotoResource::make($car);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarPhoto $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, CarPhoto $car)
    {
        $data = $request->validated();
        $car->update($data);
        return CarPhotoResource::make($car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarPhoto $car)
    {
        $car->delete();
        return response()->json([
            'message' => 'CarPhoto Deleted',
        ]);
    }
}
