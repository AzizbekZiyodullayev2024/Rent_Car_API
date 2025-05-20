<?php

namespace App\Http\Controllers;
use App\Http\Resources\CarPhotoResource;
use App\Models\CarPhoto;
use App\Http\Requests\CarPhoto\StoreRequest;
use App\Http\Requests\CarPhoto\UpdateRequest;

class CarPhotoController extends Controller
{
    public function index()
    {lstat
        $cars = CarPhoto::all();
        return CarPhotoResource::collection($cars);
    }

    public function store(StoreRequest $request)
    {

        if (!$request->hasFile('image')) {
            return response()->json(['message' => 'Rasm topilmadi!'], 400);
        }
        
        $path = $request->file('image')->store('car_photos', 'public');
        
        $photo = CarPhoto::create([
            'car_id' => $request->car_id,
            'image_url' => '/storage/' . $path,
            'is_main' => $request->is_main ?? false,
        ]);
        
        if (!$photo) {
            return response()->json(['message' => 'Saqlashda xatolik yuz berdi!'], 500);
        }
        
        return response()->json([
            'message' => 'Rasm muvaffaqiyatli saqlandi!',
            'data' => $photo
        ], 201);
    }

    public function show(CarPhoto $photo)
    {
        return CarPhotoResource::make($photo);
    }

    public function update(UpdateRequest $request, CarPhoto $photo)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $path = $image->storeAs('car_photos', $imageName, 'public');

            // eski rasm faylini o'chirish
            $storagePath = storage_path('app/public/' . str_replace('/storage/', '', $photo->image_url));
            if ($photo->image_url && file_exists($storagePath)) {
                unlink($storagePath);
            }

            $data['image_url'] = '/storage/' . $path;
        }

        $photo->update($data);
        return CarPhotoResource::make($photo);
    }

    public function destroy(CarPhoto $photo)
    {
        $storagePath = storage_path('app/public/' . str_replace('/storage/', '', $photo->image_url));
        if ($photo->image_url && file_exists($storagePath)) {
            unlink($storagePath);
        }
        $photo->delete();

        return response()->json([
            'message' => 'Car photo deleted successfully.',
        ]);
    }
}