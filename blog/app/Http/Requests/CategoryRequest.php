<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $rules = [
            'code' => 'required|min:1|max:10|unique:categories,code',
            'name' => 'required|min:4|max:40',
            'name_en' => 'required|min:4|max:40',
            'description' => 'required|min:4|max:255',
            'description_en' => 'required|min:4|max:255',
        ];

        if ($this->route()->named('categories.update')) {
            $rules['code'] .= ',' . $this->route()->parameter('category')->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения!',
            'min' => 'Поле должно иметь минимум :min символа',
            'max' => 'Поле должно иметь максимум :max символов',
            'numeric' => 'Поле должно содержать только цифры',
            'code.required' => 'Поле "код" обязательно для заполнения!',
            'name.required' => 'Поле "название" обязательно для заполнения!',
            'description.required' => 'Поле "описание" обязательно для заполнения!',
            'unique' => 'Категория с этим кодом уже зарегистрирована',
        ];
    }
}
