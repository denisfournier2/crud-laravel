<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required',
            'pages'=>'required|numeric',
            'id_user'=>'required',
            'price'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Insira o titulo',
            'pages.required' => 'Insira a quantidade de paginas',
            'id_user.required' => 'Insira o autor',
            'pages.numeric' => 'Insira a quantidade de paginas em numeros',
            'price.required' => 'Insira o preco',
        ];
    }
}
