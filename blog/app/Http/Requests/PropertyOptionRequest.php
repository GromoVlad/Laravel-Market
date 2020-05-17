<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyOptionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'name_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name' => 'Обязательно введите название',
            'name_en' => 'Обязательно введите название',
        ];
    }
}
