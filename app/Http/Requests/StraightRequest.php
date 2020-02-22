<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StraightRequest extends FormRequest
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
            'straight' => 'required|array|min:1|max:7',
            'straight.*' => 'required|integer|min:2|max:14',
        ];
    }
}
