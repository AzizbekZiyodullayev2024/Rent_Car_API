<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPhoto extends Model
{
    use HasFactory;
    protected $fillable = ['car_id', 'image_url', 'is_main'];

    public function car()
    {

        return $this->belongsTo(Car::class);
    }
}
