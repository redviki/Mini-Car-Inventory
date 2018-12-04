<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelAddRequest extends FormRequest
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
            'mfg' => 'required',
            'model'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'mfg.required' => 'Please select manufacturer!',
            'model.required' => 'Please enter model name!',
        ];
    }
}
