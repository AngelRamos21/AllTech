@extends('template.base')
@section('css')

    <link rel="stylesheet" href={{ asset('/css/styles.css') }}>
    <link rel="stylesheet" href={{ asset('/css/bootstrap.css') }}>

@endsection
@section('content')
@include('partials.header')
  <div class="row justify-content-center">
       <div class="col-4">
            <form class="registro" action="" method="post">
                 <h2>Recuperar contraseña</h2>
                 <hr>
                 <label for="">Por favor instroduzca su email o su nombre de usuario </label>
                 <input type="email" name="EmailUsuario" value=" " placeholder="Correo electrónico o Nombre de Usuario">
                 <input type="hidden" name="form" value="recuperar">
                 <br>
                 <br>
                 <button type="submit" class="btn btn-default btn-lg">Recuperar</button>
                 <br>
                 <p><small>¿No tienes una cuenta?</small> <a href="index.php">Creala</a></p>
            </form>
      </div>
 </div>
@endsection
