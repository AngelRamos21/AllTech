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
      $user=User::find( Auth::user()->id);

      $posteos=$user->posts()->orderBy('created_at' ,'dec')->get();
        return view('usuario.perfil')->with('firstName',$firstName)->with('posteos',$posteos);
    }

}
