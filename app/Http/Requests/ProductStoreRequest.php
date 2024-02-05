<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required|max:10|min:5',
            'price' => 'required|numeric',
            'photo' => 'image|mimes:png,jpg,svg|max:10',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Name maydoni yozilsin' ,
            'name.max' => 'Name 10 ta belgidan ko`p bo`lmasin' ,
        ];
    }
}
