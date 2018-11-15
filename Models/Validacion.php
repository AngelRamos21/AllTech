<?php
require_once("DateBase.php");

class Validacion
{
public function ValidarForm($datos , DateBase $base) {


foreach ($datos as $key => $value) {
  $datos[$key]=trim($value);
}

$errores['email']="";
$errores['nombre']="";
$errores['nombreC']="";
$errores['contrasena']="";
$errores['contrasena2']="";




if(empty( $datos['nombre']) ){
    $errores['nombre'] = "El nombre de usuario es obligatorio.";

//cantidad de caracteres del nombre
}
$usuarioDatos= $base->traerUsuario($datos['nombre']);

while ($usuarioDatos) {
  if($usuarioDatos->getNombreUsuario() == $datos['nombre'] )
      {
      $errores['nombre'] = "El nombre de usuario ya existe ";
      }
   break;
}

if( strlen($datos['nombre']) < 4 || strlen($datos['nombre']) > 30){
    $errores['nombre'] = "El nombre de usuario debe ser de al menos 3 caracteres y menor a 30 caracteres.<br>";

}
if(empty($datos['nombreC']) ){
    $errores['nombreC'] = "El nombre es obligatorio.<br>";

//cantidad de caracteres del nombre
}else if( strlen($datos['nombreC']) < 4 || strlen($datos['nombreC']) > 30){
    $errores['nombreC'] = "El nombre debe ser de al menos 3 caracteres y menor a 30 caracteres.<br>";

}else if(!ctype_alpha(str_replace(' ', '', $datos['nombreC']))) {
  $errores['nombreC'] = "El nombre sólo puede contener letras";

}
//email vacio
if(empty($datos['email'])){
    $errores['email'] = "El email es obligatorio.<br>";

  //formato del email
}
$usuarioDatos= $base->traerUsuario($datos['email']);

while ($usuarioDatos != NULL) {
  if($datos['email'] == $usuarioDatos->getEmail()){
      $errores['email'] = "El email ya existe,registre otro por favor ";}
      break;
}

if(filter_var($datos['email'], FILTER_VALIDATE_EMAIL) == false){
  $errores['email'] = "Formato de email inválido";

}

  if(empty($datos['contrasena'])){
    $errores['contrasena']= "La contraseña es obligatoria";

  }else if ( strlen($datos['contrasena']) < 5)
  {
$errores['contrasena']= "La contraseña es muy corta";

}
while (strlen($datos['contrasena']) > 5) {
  if($datos['contrasena'] !== $datos['contrasena2']){
    $errores['contrasena2'] = "La contraseña no es la misma";

  }else if(empty($datos['contrasena2']))
  {
    $errores['contrasena2'] = "";
  }
  break;
}

return $errores;


}



public function validarLogueo($datos , DateBase $base){

foreach ($datos as $key => $value) {
  $datos[$key] = trim($value);
}
$errores['nombreL']="";
$errores['contrasenaL']="";

if(empty($datos['nombreL'])){
    $errores['nombreL'] = "El email o el nombre de usuario esta vacio ";

  //formato del email
}else if($base->traerUsuario($datos['nombreL']) == NULL){
  $errores['nombreL'] = "El usuario no existe";

}
$usuario =$base->traerUsuario($datos['nombreL']);

if($datos['contrasenaL'] == "")
{
$errores['contrasenaL'] = "La contraseña esta vacia";

}else if($usuario != NULL){

 if (password_verify($datos["contrasenaL"], $usuario->getContrasena()) == false)
{

$errores['contrasenaL'] = "La contraseña es incorrecta";
}
}


return $errores;
}






}





 ?>
