<?php

namespace App\Http\Resources\CarPhoto;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarPhotoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'car_id' => $this->car_id,
            'image_url' => $this->image_url,
            'is_main' => $this->is_main,
        ];
    }
}
