<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegistrarUsuarioRequest;
use App\User;
class UsuarioController extends Controller
{
    public function mostrarPerfil()
    {

      $name= Auth::user()->name;
      $firstName = explode(" ", $name);

        return view('usuario.perfil')->with('firstName',$firstName);
    }

}
