<?php

namespace App\Http\Controllers;

use App\Http\Requests\Car\UpdateRequest;
use App\Http\Requests\City\StoreRequest;
use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::all();
        return CityResource::collection($cities);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $city = City::create($data);     
        return CityResource::make($city)->resolve();   
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        return CityResource::make($city);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, City $city)
    {
        $data = $request->validated();
        $city->update($data);
        return CityResource::make($city);
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return response()->json([
            'message' => 'City deleted',
        ]);
    }
}
