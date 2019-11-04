<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CakesEditRequest extends FormRequest
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
            "nameCake" => "required|min:3",
            "imageCake" => "required",
            "priceCake" => "required"
        ];
    }
}
