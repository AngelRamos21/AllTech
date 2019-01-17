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
        $posteo=$_POST['text'];
         if (!empty($posteo)) {
              $user_id=Auth::user()->id;
              $usuario=post::create([
                  'name' =>Auth::user()->name,
                  'text' => $posteo,
                  'user_id' => $user_id
             ]);
              return 'Post publicado';
              }
      return 'Error al postear';
     }
   public function eliminar()
   {
     $post=Post::find($_POST['id']);
     $post->delete();
  return'eliminado';

   }
   public function editar(Request $request)
   {
     $nuevoPost=$_POST['texto'];
     $posteo=Post::find($_POST['ide']);
    $posteo->text= $nuevoPost;
    $posteo->save();


     return 'editado';

   }
   public function listarPosteos()
   {
     $user=User::find(Auth::user()->id);
    $posteos=$user->posts()->orderBy('created_at' ,'dec')->get();
    return [$posteos,$user];
   }
}
