@extends('template.base')
@section('css')
  <link rel="stylesheet" href={{ asset('/css/bootstrap.css') }}>
   <link rel="stylesheet" href={{ asset('/css/estilos.css') }}>
@endsection
@section('content')
  <header class="p15">

    <div class="row justify-content-center ">
         <div class="col-md-12 col-lg-10 ">
              <div class=" row align-items-center  ">
                <a class="titulo"href="" method=""><h1 class="titulo">AllTech</h1></a>
                  <div  class=" col-md-4 col-sm-2 mt-3	">

                 </div>



                 <div class="col-6	">
                   <ul class="navBar nav justify-content-end grey lighten-4 ">
<li class="nav-item">
  
</li>
<li class="nav-item">
  <a class="nav-link" href="#!">{{$firstName[0]}}</a>
</li>

<li class="nav-item">
  <a class="nav-link " href="/editarPerfil">Editar Perfil</a>
</li>
<li class="nav-item">
  <a class="nav-link disabled"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration:none;"> <span><ion-icon style="font-size:20px;"name="exit">

    </ion-icon></span>	  </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
</li>
</ul>

                 </div>




                <div class=" col-md-2 ">

                </div>

            </div>

          </div>

  </div>
  </header>


<section >
    <div class="row ">
            <div class="slider col-12 ">
                <ul>
                    <li>
                    <img src="./images/fondo1.jpg" alt="">
                    </li>
                    <li>
                    <img src="./images/fondoo.jpg" alt="">
                    </li>
                    <li>
                    <img src="./images/amd.jpg" alt="">
                    </li>
                    <li>
                    <img src="./images/portada.jpg" alt="">
                    </li>
                    </ul>
            </div>

            <div class="perfil col-7	 align-self-start">
               <img src="{{Storage::url('users/'.Auth::user()->image) }}" alt="">
               <span class="nameUsuario">{{ Auth::user()->name }}</span>
           </div>
    </div>

</section>
<main class="p15 ">
<section>
  <div class="row mt-4">
        <div class="informacion col-3 mt-5 ">
           <h5>Informacion</h5>
           <hr>
           <ul>
            <li>Copyright (c) 2018 Copyright Holder All Rights Reserved.</li>
            <hr>
            <li>Copyright (c) 2018 Copyright Holder All Rights Reserved.</li>
            <hr>
            <li>Copyright (c) 2018 Copyright Holder All Rights Reserved.</li>
            <hr>
           </ul>
        </div>
        <div class="posteo col-7 ml-3">
          <div class="container">

<form class="" action="/post" method="post">
  @csrf
  <div class="form-group">
        <textarea  name="post" class="form-control status-box" rows="3"  placeholder="¿Qué tienes en mente?"></textarea>
  </div>


 <div class="button-group pull-right">
   <p class="counter">140</p>
    <button type="submit" name="button" class="public btn btn-primary" >Publicar</button>
 </div>
</form>
@forelse ($posteos as $post)
  <ul class="posts">
    <li>     <div class="row mt-3">
               <div class="postImg col-2">
               <img src='{{Storage::url('users/'.Auth::user()->image) }}' alt="">
               <span class="nameUsuarioPost">{{ Auth::user()->userName }}</span>
               </div>
               <div class=" post col-10">
                 <p>{{$post->text}}</p>
                 <hr>
                 <small>Publicado: ({{$post->created_at}})</small>
                 <small>{{$post->updated_at>$post->created_at?'Editado':''}}</small>

                 <?php $modal=$post->id; ?>
                 <button type="button" class="btn btn-sm btn-primary pull-right mt-2 ml-1 mb-2" ng-click="edit(row);" data-toggle="modal" data-target="#editComment{{$modal}}">
                <i class="fa fa-fw fa-pencil" ></i>
                 </button>
                 <div class="modal fade" id="editComment{{$modal}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                 <div class="modal-dialog modal-dialog-centered" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLongTitle">Editar posteo</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form method="post" action="{{url('/editarPost')}}">
                           {{csrf_field()}}
                           <div class="form-group">
                           <textarea name="post" class="form-control status-box" rows="3">{{$post->text}}</textarea>
                           </div>
                           <input type="hidden" name="id_post" value="{{$post->id}}" />


                     </div>

                     <div class="modal-footer">
                         <p class="counter pull-left">140</p>
                        <button type="submit" name="button" class="public btn btn-primary pull-right" >Editar</button>
                       <button type="button" class="btn btn-secondary pull-right ml-2" data-dismiss="modal">cerrar</button>



                     </div>
                      </form>
                   </div>
                 </div>
               </div>




                 <a href="/eliminarPost/{{$post->id}}">
                 <button type="button" class="btn btn-sm btn-danger pull-right mt-2  mb-2 " ng-click="remove(row);">
                 <i class="fa fa-fw fa-trash-o" ></i>
                </button>
                </a>
               </div>

            </div>
     </li>
  </ul>



@empty

@endforelse

</div>


        </div>
  </div>
</section>

@endsection
