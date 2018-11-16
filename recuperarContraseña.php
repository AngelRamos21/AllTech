<?php
require_once('autoload.php');
include("logicaValidacionForm.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/styles.css">
   </head>

   <body>
         <?php include("headerInicio.php"); ?>
         <br>   <br>   <br>
      <div class="row justify-content-center">
           <div class="col-4">
                <form class="registro" action="" method="post">
                     <h2>Recuperar contraseña</h2>
                     <hr>
                     <label for="">Por favor instroduzca su email o su nombre de usuario </label>
                     <input type="email" name="EmailUsuario" value=" " placeholder="Correo electrónico o Nombre de Usuario">
                     <input type="hidden" name="form" value="recuperar">
                     <br>
                        <span style="color:red;font-size:12px;"><?php echo  $errorEmail; ?></span>
                     <br>
                     <button type="submit" class="btn btn-default btn-lg">Recuperar</button>
                     <br>
                     <p><small>¿No tienes una cuenta?</small> <a href="index.php">Creala</a></p>
                </form>
          </div>

     </div>
     <br><br><br><br><br><br><br><br><br>
   </body>

 <?php include("footer.php"); ?>
