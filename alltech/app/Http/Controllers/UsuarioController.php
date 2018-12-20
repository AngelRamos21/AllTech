<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrarUsuarioRequest;
use App\User;
class UsuarioController extends Controller
{
    public function mostrarPerfil()
    {
        return view('usuario.perfil');
    }
  
}
