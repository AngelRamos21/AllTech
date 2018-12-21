<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
class EditarUsuarioRequest extends FormRequest
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
          'email'=> 'email', Rule::unique('users')->ignore(Auth::user()->id, 'id'),
          'name' => ' alpha_spaces |between:8,15',
          'userName'=> ' between:8,15 ',Rule::unique('users')->ignore(Auth::user()->id, 'id'),
          'password' => ' between:2,20' ,
          'passwordC' => ' same:password' ,
          'image' => 'image'
        ];
    }
    public function messages()

  {

    return [

      'required' => 'El campo es obligatorio',
      'emailR.email' => 'Debe ser un email',
      'emailR.unique' => 'el email ya existe',
      'name.alpha_spaces' => 'El campo nombre solo admite letras',
      'name.between' => 'El campo debe tener entre 8 y 15 caracteres',
      'userName.between' => 'El campo debe tener entre 8 y 15 caracteres',
      'userName.unique' => 'El nombre de usuario ya existe',
      'passwordR.between' => 'El campo debe tener entre 2 y 20 caracteres',
      'passwordC.same' => 'La contraseña no es la misma',
      'image.image' => 'No es una imagen'

    ];

  }
}
