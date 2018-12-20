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
  <a class="nav-link active" href="#!">Inicio</a>
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
               <img src="./images/perfil.jpg" alt="">
               <span class="nameUsuario"></span>
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
          <div class="row mt-3">
           <div class="postImg col-2">
             <img src="./images/perfil.jpg" alt="">
             <span class="nameUsuarioPost"></span>

           </div>
           <div class=" post  col-10">
             <p>Copyright (c) 2018 Copyright Holder All Rights Reserved.Copyright (c) 20Copyright (c) 2018 Copyright Holder All Rights Reserved.18 Copyright Holder All Rights Reserved.Copyright (c) 2018 Copyright Holder All Rights Reserved.</p>

          </div>
          </div>
          <div class="row mt-3">
           <div class="postImg col-2">
             <img src="./images/perfil.jpg" alt="">
             <span class="nameUsuarioPost"></span>

           </div>
           <div class=" post  col-10">
             <p>Copyright (c) 2018 Copyright Holder All Rights Reserved.Copyright (c) 20Copyright (c) 2018 Copyright Holder All Rights Reserved.18 Copyright Holder All Rights Reserved.Copyright (c) 2018 Copyright Holder All Rights Reserved.</p>

          </div>
          </div>
          <div class="row mt-3">
           <div class="postImg col-2">
             <img src="./images/perfil.jpg" alt="">
             <span class="nameUsuarioPost"></span>

           </div>
           <div class=" post  col-10">
             <p>Copyright (c) 2018 Copyright Holder All Rights Reserved.Copyright (c) 20Copyright (c) 2018 Copyright Holder All Rights Reserved.18 Copyright Holder All Rights Reserved.Copyright (c) 2018 Copyright Holder All Rights Reserved.</p>

          </div>
          </div>
        </div>
  </div>
</section>

@endsection
