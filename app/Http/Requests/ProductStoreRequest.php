<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|dimensions:ratio=4/3|max:1024',
            'status' => 'boolean',
            'category_id' => [
                'required',
                Rule::exists('categories', 'id')->whereNull('deleted_at')
            ],
        ];
    }
}
