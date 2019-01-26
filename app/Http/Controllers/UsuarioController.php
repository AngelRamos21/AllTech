<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EditarUsuarioRequest;
use App\User;
class UsuarioController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function mostrarPerfil()
    {

      $name= Auth::user()->name;
      $firstName = explode(" ", $name);
      $user=User::find(Auth::user()->id);

      $posteos=$user->posts()->orderBy('created_at' ,'dec')->get();
        return view('usuario.perfil')->with('firstName',$firstName)->with('posteos',$posteos);
    }

    public function showEditarPerfil()
    {
      $name= Auth::user()->name;
      $firstName = explode(" ", $name);
      return view('usuario.editarPerfil')->with('firstName',$firstName);
    }
    public function editar(Request $request)
    {

      $usuario=User::find(Auth::user()->id);
     $usuario->email= $request->input('email');
     $usuario->name= $request->input('name');
     $usuario->userName= $request->input('userName');
     $profileImage=$request->file('image');
     $imageName = $profileImage?uniqid("profile_img_") . "." . $profileImage->extension():NULL;
     if ($imageName) {
       $profileImage->storePubliclyAs("public/users", $imageName);
       $usuario->image= $imageName;
     }else{

       $usuario->image= Auth::user()->image;
     }

     $usuario->save();

    return redirect('/perfil');



   }


}
