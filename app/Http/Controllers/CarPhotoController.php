<?php

namespace App\Http\Controllers;
use App\Http\Resources\CarPhotoResource;
use App\Models\CarPhoto;
use Illuminate\Http\Request;
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
    public function store(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'is_main' => 'boolean'
        ]);

        // Faylni storagega saqlash
        $path = $request->file('image')->store('car_photos', 'public');

        // DBga yozish
        $photo = CarPhoto::create([
            'car_id' => $request->car_id,
            'image_url' => '/storage/' . $path,
            'is_main' => $request->is_main ?? false,
        ]);

        return response()->json([
            'message' => 'Rasm muvaffaqiyatli saqlandi!',
            'data' => $photo
        ], 201);
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
    public function update(Request $request, CarPhoto $carPhoto)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $path = $image->storeAs('car_photos', $imageName, 'public');

            // eski rasm faylini o'chirish (ixtiyoriy)
            if ($carPhoto->image_path && file_exists(public_path($carPhoto->image_path))) {
                unlink(public_path($carPhoto->image_path));
            }

            $data['image_path'] = '/storage/' . $path;
        }

        $carPhoto->update($data);
        return CarPhotoResource::make($carPhoto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarPhoto $carPhoto)
    {
        // Faylni o‘chirib yuboramiz (ixtiyoriy, lekin tavsiya qilinadi)
        if ($carPhoto->image_path && file_exists(public_path($carPhoto->image_path))) {
            unlink(public_path($carPhoto->image_path));
        }

        $carPhoto->delete();

        return response()->json([
            'message' => 'Car photo deleted successfully.',
        ]);
    }
}