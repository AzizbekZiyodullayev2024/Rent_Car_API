<?php

namespace App\Http\Controllers;
use App\Http\Resources\CarPhotoResource;
use App\Models\CarPhoto;
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
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        dd(12);
        
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
    public function show(CarPhoto $photo)
    {
        return CarPhotoResource::make($photo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, CarPhoto $photo)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $path = $image->storeAs('car_photos', $imageName, 'public');

            // eski rasm faylini o'chirish (ixtiyoriy)
            if ($photo->image_path && file_exists(public_path($photo->image_path))) {
                unlink(public_path($photo->image_path));
            }

            $data['image_path'] = '/storage/' . $path;
        }

        $photo->update($data);
        return CarPhotoResource::make($photo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarPhoto $photo)
    {
        // Faylni o‘chirib yuboramiz (ixtiyoriy, lekin tavsiya qilinadi)
        if ($photo->image_path && file_exists(public_path($photo->image_path))) {
            unlink(public_path($photo->image_path));
        }

        $photo->delete();

        return response()->json([
            'message' => 'Car photo deleted successfully.',
        ]);
    }
}