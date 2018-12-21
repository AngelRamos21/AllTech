<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;
use App\User;


class PostController extends Controller
{
    public function posteo(Request $request)
    {
      $post=$request->input('post');
     $user_id=Auth::user()->id;
          post::create([
          'name' =>Auth::user()->name,
          'text' => $post,
          'user_id' => $user_id

      ]);
      return redirect('/perfil');
    }
   public function eliminar($id)
   {
     $post=post::find($id);
     $post->delete();
     return redirect('/perfil');

   }
   public function editar(Request $request)
   {
     $nuevoPost=$request->input('post');
     $posteo=Post::find($request->input('id_post'));
    $posteo->text= $nuevoPost;
    $posteo->save();
    

     return redirect('/perfil');

   }
}
