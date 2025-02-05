<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => ['required', 'max:100'],
            'price' => ['required', ' numeric'],
            'description' => ['required', 'max:255', 'min:20'],
            'stock' => ['required', 'numeric']
        ];
    }
}
