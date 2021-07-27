<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return
        [
            'image' => 'required',
            'name' => 'required|unique:post',
            'scientific' => 'required',
            'category' => 'required',
            'since' => 'required',
            'species' => 'required',
            'type' => 'required',
        ];
    }
}
