<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title'=>'required|min:3|max:50',
            'description'=>'required|max:800',
            'image'=>'required|file|mimes:jpg,png,jpeg|max:2048',
//            'photos'=>'mimes:jpg,png,jpeg|max:2048',
        ];
    }
}
