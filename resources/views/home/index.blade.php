@extends('template.base')
@section('css')
  <link rel="stylesheet" href={{ asset('/css/styles.css') }}>
  <link rel="stylesheet" href={{ asset('/css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('/css/medias.css') }}>
@endsection
@section('content')
@include('partials.header')
  <main class="p15">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
             <div class="row">
               <div class="col-sm-12 col-md-6 ">
                 <section>
                      <article >

                             <form class="registro float-right  d-none  d-md-block" action="/register" method="post" enctype="multipart/form-data">
                                     <img src="images/usuario.png" alt="">
                                     <h2>Registrate</h2>
                                     <div class="form-group mb-0">
                                          @csrf
                                       <input type="text" name="emailR" placeholder="Correo electrónico" class="form-control {{ $errors->has('emailR') ? 'is-invalid' : null }}" value="{{ old('emailR') }}">
                                       <span class="invalid-feedback">
                                             @if ($errors->has('emailR'))
                                               {{ $errors->first('emailR') }}
                                             @endif
                                      </span>
                                        </div>
                                       <div class="form-group mb-0">
                                       <input type="text" name="name"  placeholder="Nombre completo" class="form-control {{ $errors->has('name') ? 'is-invalid' : null }}" value="{{ old('name') }}" >
                                       <span class="invalid-feedback">
                                             @if ($errors->has('name'))
                                               {{ $errors->first('name') }}
                                             @endif
                                      </span>
                                         </div>
                                        <div class="form-group mb-0">
                                       <input type="text" name="userName"  placeholder="Nombre de usuario" class="form-control {{ $errors->has('userName') ? 'is-invalid' : null }}" value="{{ old('userName') }}">
                                       <span class="invalid-feedback">
                                             @if ($errors->has('userName'))
                                               {{ $errors->first('userName') }}
                                             @endif
                                      </span>
                                          </div>
                                        <div class="form-group mb-0">
                                       <input type="password" name="passwordR"  placeholder="Contraseña"  class="form-control {{ $errors->has('passwordR') ? 'is-invalid' : null }}" value="" >
                                       <span class="invalid-feedback">
                                             @if ($errors->has('passwordR'))
                                               {{ $errors->first('passwordR') }}
                                             @endif
                                      </span>
                                       </div>
                                        <div class="form-group mb-0">
                                       <input type="password" name="passwordC"  placeholder="Repetir contraseña" class="form-control {{ $errors->has('passwordC') ? 'is-invalid' : null }}" value="">
                                       <span class="invalid-feedback">
                                             @if ($errors->has('passwordC'))
                                               {{ $errors->first('passwordC') }}
                                             @endif
                                      </span>
                                       </div>
                                       <br>
                                       <br>
                                       <div class="form-group">
                                       <button type="submit" class="btn btn-default btn-lg">Registrarte</button>
                                       </div>


                                     <p class="politica">Al registrarte, aceptas nuestras <br> <a href="#">Condiciones</a> , la <a href="#">Política de datos</a> y <br> la <a href="#">Política de cookies</a>.</p>
                             </form>


                     </article>



               </section>

               </div>
                   <div class="col-6  d-none  d-md-block">
                      <div class="presentacion float-right text-center   ">
                  <br><h2 style="display:inline-block;">Unite Ya! <br> <h5  style="display:inline-block;">a esta red Social de tecnicos informaticos</h5>  </h2> <br>    <br>
                  <div class="row justify-content-center ">
                    <div class="text-left ">
                      <img src="images/live.png" alt="" width="30px" height="30px">		<br><br>
                       <img src="images/grupo.png" alt="" width="30px" height="30px">	<br><br>
                          <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>  <br><br>  <br> <br>
                    </div>
                  </div>
                      </div>
                   </div>
             </div>
        </div>

      </div>




  </main>
   	@include('partials.footer')

@endsection
