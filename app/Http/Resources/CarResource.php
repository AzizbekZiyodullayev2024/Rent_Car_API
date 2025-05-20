<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
            'city_id' => $this->city_id,
            'brand' => $this->brand,
            'model' => $this->model,
            'year' => $this->year,
            'engine_volume' => $this->engine_volume,
            'fuel_consumption' => $this->fuel_consumption,
            'body_type' => $this->body_type,
            'transmission' => $this->transmission,
            'fuel_type' => $this->fuel_type,
            'seats' => $this->seats,
            'doors' => $this->doors,
            'daily_price' => $this->daily_price,
            'deposit_amount' => $this->deposit_amount,
            'insurance_type' => $this->insurance_type,
            'mileage_limit' => $this->mileage_limit,
            'is_available' => $this->is_available,
            'description' => $this->description,
            'created_at' => $this->created_at?->toDateTimeString(),
        ];
    }
}