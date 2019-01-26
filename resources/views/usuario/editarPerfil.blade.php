@extends('template.base')
@section('css')
  <link rel="stylesheet" href={{ asset('/css/bootstrap.css') }}>
  <link rel="stylesheet" href={{ asset('/css/estilos.css') }}>
   <link rel="stylesheet" href={{ asset('/css/stylesMostrarPerfil.css') }}>
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
  <a class="nav-link active" href="#!">Inicio</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="/perfil">{{$firstName[0]}}</a>
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



<div class="signup__container">
  <div class="container__child signup__thumbnail">


  </div>
  <div class="container__child signup__form">
    <form action="/editarPerfil" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="username">Nombre</label>
        <input class="form-control  {{ $errors->has('name') ? 'is-invalid' : null }}" type="text" name="name" placeholder="" value="{{Auth::user()->name}}"/>
        <span class="invalid-feedback">
              @if ($errors->has('name'))
                {{ $errors->first('name') }}
              @endif
       </span>
      </div>
      <div class="form-group">
        <label for="username">Nombre de Usuario</label>
        <input class="form-control {{ $errors->has('userName') ? 'is-invalid' : null }}" type="text" name="userName"  placeholder=""  value="{{Auth::user()->userName}}"/>
        <span class="invalid-feedback">
              @if ($errors->has('userName'))
                {{ $errors->first('userName') }}
              @endif
       </span>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control  {{ $errors->has('email') ? 'is-invalid' : null }}" type="text" name="email"  placeholder=""value="{{Auth::user()->email}}" />
        <span class="invalid-feedback">
              @if ($errors->has('email'))
                {{ $errors->first('email') }}
              @endif
       </span>
      </div>
      <div class="form-group">
        <label for="email">Subir foto de perfil</label>
        <input lass="form-control  {{ $errors->has('image') ? 'is-invalid' : null }}" name="image" type="file" />
        <span class="invalid-feedback">
              @if ($errors->has('image'))
                {{ $errors->first('image') }}
              @endif
       </span>
      </div>

      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <button class="btn btn--form"  type="submit" name="button">Guardar</button>
          </li>

        </ul>
      </div>
    </form>
  </div>
</div>
@endsection
