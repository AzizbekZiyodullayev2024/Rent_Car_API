<?php

namespace App\Http\Requests\CarPhoto;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'car_id' => 'required|exists:cars,id',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'is_main' => 'nullable|boolean',
        ];
    }
}