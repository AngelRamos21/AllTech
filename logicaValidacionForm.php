<?php   include_once("autoload.php");


if(isset($_COOKIE['logueado']))
{

$emailOusuario= $_COOKIE['logueado'];

header("location:logueado.php?emailOusuario=$emailOusuario");exit;
}

$nombre = "";
$nombreC="";
$email = "";
$nombreL="";
$erroresL['nombreL']="";
$erroresL['contrasenaL']="";
$erroresR['email']="";
$erroresR['nombre']="";
$erroresR['nombreC']="";
$erroresR['contrasena']="";
$erroresR['contrasena2']="";

if($_POST)
{
if ($_POST['form'] == "login") {

 $erroresL=$validacion->validarLogueo($_POST , $base);

 if (($erroresL["nombreL"]== "")) {
 $nombreL=trim($_POST['nombreL']);
 }

 $i=0;
 foreach ($erroresL as  $value) {
   if($value == "")
   {
     $i++;
   }
 }
 if($i >= 2)
 {
   $aute->loguear($nombreL);
   if (isset($_POST['recordar'])) {
    $aute->recordame($nombreL);
   }
   $emailOusuario = $nombreL;
 header("location:logueado.php?emailOusuario=$emailOusuario");exit;
}
} else if ($_POST['form'] == "registro" ) {

    $erroresR = $validacion->validarForm($_POST, $base);


    if (($erroresR["email"]== "")) {
      $email = trim($_POST['email']);
    }

    if (($erroresR["nombreC"]== "")) {
    $nombreC=trim($_POST['nombreC']);
    }

    if (($erroresR["nombre"]== "")) {
        $nombre = trim($_POST['nombre']);
    }


 $i=0;
 foreach ($erroresR as  $value) {
   if($value == "")
   {
     $i++;
   }
 }

 if ($i >= 5) {
   $usuario= new Usuario($_POST['email'] ,$_POST['nombreC'],$_POST['nombre'],$_POST['contrasena']);
  $usuario= $base->guardarUsuario($usuario);
header("location:index.php");exit;
 }




}
}
?>
