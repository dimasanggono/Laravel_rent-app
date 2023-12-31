<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required|max:50",
            "categories_id" => 'required|integer|exists:categories,id',
            "place" => "required",
            "price" => "required|integer",
            "image" => "required|image|mimes:png,jpg,jpeg"
        ];
    }
}
