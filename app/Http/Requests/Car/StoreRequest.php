<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'city_id' => 'required|integer|exists:cities,id',
            'brand' => 'required|string|max:100',
            'model' => 'required|string|max:100',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1), // 1900 dan hozirgi yilgacha
            'engine_volume' => 'required|string|max:50',
            'fuel_consumption' => 'required|string|max:50',
            'body_type' => 'required|string|max:50',
            'transmission' => 'required|string|max:50',
            'fuel_type' => 'required|string|max:50',
            'seats' => 'required|integer|min:1|max:20',
            'doors' => 'required|integer|min:1|max:10',
            'daily_price' => 'required|integer|min:0',
            'deposit_amount' => 'required|integer|min:0',
            'insurance_type' => 'required|in:OSAGO,CASCO',
            'mileage_limit' => 'required|integer|min:0',
            'is_available' => 'sometimes|boolean',
            'description' => 'nullable|string',
        ];
    }
}
