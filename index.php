<?php
include('logicaValidacionForm.php')
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

		<?php	include('headerInicio.php')	 ?>
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
                                       <span style="color:red;font-size:12px;"><?php echo  $erroresR['email']; ?></span>

                                     <input type="text" name="nombreC" value="<?php echo $nombreC; ?>" placeholder="Nombre completo" >
                                     <span style="color:red;font-size:12px;"><?php echo $erroresR['nombreC']; ?></span>


                                     <input type="text" name="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre de usuario" >
                                        <span style="color:red;font-size:12px;"><?php echo  $erroresR['nombre']; ?></span>

                                     <input type="password" name="contrasena"  placeholder="Contraseña" >
                                       <span style="color:red;font-size:12px;"><?php echo  $erroresR['contrasena']; ?></span>

                                     <input type="password" name="contrasena2"  placeholder="Repetir contraseña">
                                       <span style="color:red;font-size:12px;"><?php echo  $erroresR['contrasena2']; ?></span>

                                       <input type="hidden" name="form" value="registro">
                                     <br>
                                     <br>

                                     <button type="submit" class="btn btn-default btn-lg">Registrarte</button>
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
											<img src="images/live.png" alt="" width="30px" height="30px">		Chatea en vivo con los usuarios<br><br>
											 <img src="images/grupo.png" alt="" width="30px" height="30px">	 Crea equipos de trabajo<br><br>
													<br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>    <br>  <br><br>  <br> <br>
										</div>
                  </div>

                      </div>
                   </div>


             </div>


        </div>

      </div>




  </main>

<?php include("footer.php"); ?>
