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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:6|string',
            'position' => 'required|min:6|string',
            'office' => 'required|min:6|string',
            'age' => 'required',
            'startDate' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'name khong duoc de trong',
            'name.min' => 'name it nhat 6 ky tu',
            'name.string' => 'name la string',
            'position.required' => 'position khong duoc de trong',
            'position.min' => 'position it nhat 6 ky tu',
            'position.string' => 'position la string',
            'office.required' => 'office khong duoc de trong',
            'office.min' => 'office it nhat 6 ky tu',
            'office.string' => 'office la string',
            'age.required' => 'age khong duoc de trong',
            'startDate' => 'start Date khong duoc de trong'
        ];
    }
}
