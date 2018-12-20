<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
class RegistrarUsuarioRequest extends FormRequest
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
          'emailR'=> 'required | email | unique:users,email',
          'name' => 'required | alpha_spaces |between:8,15',
          'userName'=> 'required | between:8,15 | unique:users,userName',
          'passwordR' => 'required | between:2,20' ,
          'passwordC' => 'required | same:passwordR' ,

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


		];

	}
}
