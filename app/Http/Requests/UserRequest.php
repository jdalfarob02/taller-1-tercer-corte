<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nombre'=>'required|alpha|min:6|max:255',
            'email'=>'required|email:rfc|unique:App\Models\User,email',
            'telefono'=> 'integer|numeric|nullable',
            'titulo'=> 'required|min:5|max:255' ,
            
        ];
    }

    public function attributes()
    {
        return [
            'nombre'=>'Nombre',
            'email'=>'direccion de correo electronico',
            'telefono'=> 'numero de telefono',
            'titulo'=> 'titulo universitario' ,
            
        ];
    }


    public function messages()
    {
        return [
            'nombre.required'=>'El :attribute es requerido',
            'nombre.min'=>'El :attribute debe contener más de 6 caracteres',
            'nombre.max'=>'El :attribute no puede contener mas de 255 caracteres',
            'nombre.alpha'=>'El :attribute solo se aceptan unicamente letras',
            'email.required'=>'El :attribute es requerido',
            'email.email'=>'El :attribute no comple con los requisitos',
            'email.unique'=>'El :attribute el correo ya  existe intente con otro',
            'telefono.integer'=> 'El :attribute debe ser un entero',
            'telefono.numeric'=> 'El :attribute debe ser solo numerico',
            'telefono.required'=>'El :attribute es requerido',
            'titulo.required'=> 'el :attribute es requerido' ,
            'titulo.min'=> 'el :attribute debe contener por lo menos 5 caracteres' ,
            'titulo.max'=> 'el :attribute no puede contener mas de 255 caracteres' ,
            
        ];
    }
}
