<?php
	include_once("autoload.php");

if($_SESSION['logueado']){
if($_GET)
{
$emailUsuario= $_GET['emailOusuario'];
$usuario = $base->traerUsuario($emailUsuario);


}
}else 
{
 header("location:index.php");exit;

}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Bienvenidoooooooooooo <?php echo $usuario->getNombreC(); ?>  </h1>
		<button type="button" name="button"> <a href="salir.php" style="text-decoration:none; color:#000000;"> Salir</a></button>
	<script>

	</script>

  </body>
</html>
