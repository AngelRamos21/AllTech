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
                     <form action="" class="search-form ">
                         <div class="form-group has-feedback">
                          <span class="glyphicon glyphicon-search form-control-feedback"><ion-icon name="search"></ion-icon></span>
                          <input type="text" class="form-control" name="search" id="search" placeholder="Buscar">
                          <label for="search" class="sr-only">Search</label>
                          </div>
                     </form>
                 </div>



                 <div class="col-6	">
                   <ul class="navBar nav justify-content-end grey lighten-4 ">
<li class="nav-item">
  <a class="nav-link active" href="/perfil">perfil</a>
</li>
<li class="nav-item">
  <a class="nav-link active" href="/inicio">Inicio</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#!"></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="#!">Notificaciones</a>
</li>
<li class="nav-item">
  <a class="nav-link " href="#!">Configuracion</a>
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
  <div class="container">
    <section class="main row">
      <article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
        <main class="p15 ">
      <section>
        <div class="row mt-4">
              <div class="informacion col-3 mt-5">
                 <h5>Informacion</h5>
                 <br>
                  <li>Copyright (c) 2018 Copyright Holder All Rights Reserved.</li>
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
    @foreach ($posteos as $post): ?>

        <ul class="posts">
          <li>     <div class="row mt-3">
                     <div class="postImg col-2">
                     <img src="./images/perfil.jpg" alt="">
                     <span class="nameUsuarioPost">{{ Auth::user()->userName }}</span>
                     </div>
                     <div class=" post col-10">
                       <p>{{$post->text}}</p>
                       <hr>
                       <small>Publicado: ({{$post->created_at}})</small>
                       <small>{{$post->updated_at>$post->created_at?'Editado':''}}</small>

                       <?php $modal=$post->id; ?>

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
        <li>


      @endforeach

      </div>


              </div>
        </div>
      </section>
      </article>
      <aside class="col-xs-0 col-sm-4 col-md-3 col-lg-3">
        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

      </aside>

    </section>

  </div>




@endsection
