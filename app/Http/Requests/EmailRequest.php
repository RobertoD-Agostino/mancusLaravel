<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
           'nome' => 'required|min:3|max:200',
           'email'=>'required',
           'age'=>'required|numeric|min:18',
           'textArea'=>'required|min:20|max:400',
           'primaImg'=>'required|mimes:jpg,png,jpeg',
           'secondaImg'=>'required|mimes:jpg,png,jpeg',
           'city'=>'required',
           'appointment'=>'required',
        ];
    }

    public function message(){
        return [
            'nome.required' => "",
            'email.required' => "",
            'age.required' => "",
            'textArea.required' => "",
            'primaImg.required' => "",
            'secondaImg.required' => "",
            'city.required' => "",
            'appointment.required' => "",
        ];

    }
}
