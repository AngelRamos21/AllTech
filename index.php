<?php
$errorNombre = "";
$errorNombreC = "";
$errorEmail = "";
$errorContrasena = "";
$errorContrasena2="";
$nombre = "";
$nombreC="";
$email = "";


if($_POST){

  $nombre = trim($_POST['nombre']);
  $nombreC=trim($_POST['nombreC']);
  $email = trim($_POST['email']);
  $contrasena = trim($_POST['contrasena']);
  $contrasena2 = trim($_POST['contrasena2']);

  if(empty($nombre) ){
      $errorNombre = "El nombre de usuario es obligatorio.<br>";
  //cantidad de caracteres del nombre
  }else if( strlen($nombre) < 4 || strlen($nombre) > 30){
      $errorNombre = "El nombre de usuario debe ser de al menos 3 caracteres y menor a 30 caracteres.<br>";
  }
  if(empty($nombreC) ){
      $errorNombreC = "El nombre es obligatorio.<br>";
  //cantidad de caracteres del nombre
}else if( strlen($nombreC) < 4 || strlen($nombreC) > 30){
      $errorNombreC = "El nombre debe ser de al menos 3 caracteres y menor a 30 caracteres.<br>";
  }else if(!ctype_alpha(str_replace(' ', '', $nombreC))) {
    $errorNombreC = "El nombre sólo puede contener letras";
}
  //email vacio
  if(empty($email)){
      $errorEmail = "El email es obligatorio.<br>";
    //formato del email
  }else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
      $errorEmail = "Formato de email inválido";
  }

    if(empty($contrasena) || strlen($contrasena) < 5){
      $errorContrasena = "La contraseña es muy corta";
    }

    if($contrasena !== $contrasena2){
      $errorContrasena2 = "La contraseña no es la misma";
    }





}



 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/medias.css">
    <title>AllTech</title>
  </head>
  <body>

  <header class="p15">
          <div class="row justify-content-center ">
              <div class="col-md-12 col-lg-10  ">
                <div class="row align-items-center">
                         <div class="tituloCell col-sm-12 col-md-4">
                            <h1 class="titulo">AllTech</h1>
                         </div>

                         <div class="logueoCol col-sm-12 col-md-8 text-right ">
                             <form class="logueoForm d-block  d-md-block" action="index.php" method="post">
                                <input class="" type="text" name="" value="" placeholder=" Nombre de Usuario">
                                <input class="" type="password" name="" value="" placeholder="  Contraseña">
                                <button type="button" class="btn btn-default btn-sm"><span> Iniciar Sesión</span> </button>
                                <br>
                              <a href="#">¿La olvidaste?</a>
                             </form>

                        </div>
                        <div class="logueoBtn col-12 text-center d-md-none">
                            <a href="#">¿No tienes una cuenta?</a>
                            <br>
                        <button type="button" class=" btn-sm "><span> Crear una cuenta</span> </button>
                        </div>
                </div>


              </div>


          </div>


  </header>

  <main class="p15">

      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
             <div class="row">
               <div class="col-sm-12 col-md-6 ">
                 <section>
                      <article >

                             <form class="registro float-right  d-none  d-md-block" action="index.php" method="post" enctype="multipart/form-data">
                                     <img src="images/usuario.png" alt="">
                                     <h2>Registrate</h2>
                                     <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Correo electrónico">
                                       <span style="color:red;font-size:12px;"><?php echo $errorEmail; ?></span>

                                     <input type="text" name="nombreC" value="<?php echo $nombreC; ?>" placeholder="Nombre completo" >
                                     <span style="color:red;font-size:12px;"><?php echo $errorNombreC; ?></span>


                                     <input type="text" name="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre de usuario" >
                                        <span style="color:red;font-size:12px;"><?php echo $errorNombre; ?></span>

                                     <input type="password" name="contrasena"  placeholder="Contraseña" >
                                       <span style="color:red;font-size:12px;"><?php echo $errorContrasena; ?></span>

                                     <input type="password" name="contrasena2"  placeholder="Repetir contraseña">
                                       <span style="color:red;font-size:12px;"><?php echo $errorContrasena2; ?></span>
                                     <br>
                                     <br>
                                     <button type="submit" class="btn btn-default btn-lg">Registrarte</button>
                                     <p class="politica">Al registrarte, aceptas nuestras <br> <a href="#">Condiciones</a> , la <a href="#">Política de datos</a> y <br> la <a href="#">Política de cookies</a>.</p>
                             </form>


                     </article>



               </section>

               </div>
                   <div class="col-6  d-none  d-md-block">
                      <div class="presentacion float-right   ">
                    <h2>  Unite Ya!</h2> <br>
                      a esta red Social de tecnicos informaticos  <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>  <br>
                      </div>
                   </div>


             </div>


        </div>

      </div>




  </main>


<footer class="p15">
  <div class="row justify-content-center">
      <div class=" col-md-12 col-lg-10 ">
           <a href="#">Sobre nosotros</a>
           -
           <a href="#">Ayuda</a>
           -
           <a href="#">Blog</a>
           -
           <a href="#">Condiciones</a>
           -
           <a href="#">Privacidad</a>
           -
           <small class="float-right">@2018 AllTech</small>
      </div>
  </div>


</footer>

    <script  src = "https://unpkg.com/ionicons@4.4.2/dist/ionicons.js" > </script>
  </body>
</html>
