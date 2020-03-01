<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Model\Product;

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
        $rules = [
            'code'        => 'required|min:1|max:40|unique:products,code',
            'name'        => 'required|min:4|max:40',
            'description' => 'required|min:4|max:255',
            'price'       => 'required|numeric|min:1',
        ];

        if($this->route()->named('products.update')){
            $rules['code'] .= ',' . $this->route()->parameter('product')->id;
        }

        return $rules;

    }

    public function messages()
    {
        return [
            'required'             => 'Поле обязательно для заполнения!',
            'min'                  => 'Поле должно иметь минимум :min символа',
            'max'                  => 'Поле должно иметь максимум :max символов',
            'numeric'              => 'Поле должно содержать только цифры',
            'code.required'        => 'Поле "код" обязательно для заполнения!',
            'name.required'        => 'Поле "название" обязательно для заполнения!',
            'description.required' => 'Поле "описание" обязательно для заполнения!',
            'price.required'       => 'Поле "цена" обязательно для заполнения!',
            'unique'               => 'Продукт с этим кодом уже зарегистрирован',
        ];
    }
}
