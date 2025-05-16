<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'brand',
        'model',
        'year',
        'engine_volume',
        'fuel_consumption',
        'transmission',
        'fuel_type',
        'seats',
        'doors',
        'daily_price',
        'deposit_amount',
        'insurance_type',
        'mileage_limit',
        'is_available',
        'description',
    ];
}
