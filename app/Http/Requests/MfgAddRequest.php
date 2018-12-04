<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MfgAddRequest extends FormRequest
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
            'mfg_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'mfg_name.required' => 'Please enter manufacturer name!',
        ];
    }

}
