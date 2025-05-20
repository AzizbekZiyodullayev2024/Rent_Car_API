<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPhoto extends Model
{
    use HasFactory;

    // Mass assignment uchun ruxsat berilgan maydonlar
    protected $fillable = ['car_id', 'image_url', 'is_main'];

    // Car modeli bilan bog'lanish
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}