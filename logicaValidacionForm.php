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
$errorEmail="";
if($_POST)
{       //LOGICA PARA EL LOGIN
      if ($_POST['form'] == "login")
       {
            $erroresL=$validacion->validarLogueo($_POST , $base);
            if (($erroresL["nombreL"]== ""))
               {
               $nombreL=trim($_POST['nombreL']);
               }
            $i=0;
            foreach ($erroresL as  $value)
                  {
                    if($value == "")
                      {
                      $i++;
                      }
                   }
             if($i >= 2)
               {
               $aute->loguear($nombreL);
                  if (isset($_POST['recordar']))
                   {
                   $aute->recordame($nombreL);
                   }
               $emailOusuario = $nombreL;
               header("location:logueado.php?emailOusuario=$emailOusuario");exit;
               }
             //LOGICA PARA EL REGISTRO
          } else if ($_POST['form'] == "registro" )
                 {
                   $erroresR = $validacion->validarForm($_POST, $base);
                   if (($erroresR["email"]== ""))
                   {
                   $email = trim($_POST['email']);
                    }
                   if (($erroresR["nombreC"]== "")) {
                   $nombreC=trim($_POST['nombreC']);
                   }
                   if (($erroresR["nombre"]== "")) {
                   $nombre = trim($_POST['nombre']);
                   }
                   $i=0;
                   foreach ($erroresR as  $value)
                         {
                         if($value == "")
                           {
                           $i++;
                           }
                         }

                   if ($i >= 5)
                     {
                     $usuario= new Usuario($_POST['email'] ,$_POST['nombreC'],$_POST['nombre'],$_POST['contrasena']);
                     $usuario= $base->guardarUsuario($usuario);
                     header("location:index.php");exit;
                     }
                      //LOGICA PARA EL FORM DE RECUPERACION DE CONTRASEÑA
                 }else if ($_POST['form'] == "recuperar" )
                        {
                         $errorEmail = $validacion->validarEmailoUsuario($_POST, $base);
                          if($errorEmail == "")
                          {
                            $usuario=$base->traerUsuario($_POST['EmailUsuario']);
                            $email=$usuario->getEmail();
                            $idUser=$usuario->getId();
                            $nameUser=$usuario->getNombreUsuario();
                            $tokenPass=$base->generarTokken($idUser);

                            //MANDAR Email
                            $url='http://'.$_SERVER["SERVER_NAME"].'/php/AllTech/cambiarPass.php?idUser='.$idUser.'&token='.$tokenPass;
                            $asunto ="Recuperar Contraseña-AllTech";
                            $cuerpo=$nameUser.': <br><br> Has solicitado un cambio de contraseña.<br> Para restaurar la contraseña por favor valla a la siguiente pagina <a href='.$url.'>'.$url.'</a>';
                            if(mail($email,$asunto,$cuerpo) )
                                {?>
                                  <script>
                                   window.alert("Le hemos enviado un email a:".$email." ");
                                      header("location:index.php");exit;
                                  </script>

                          <?php}else {?>
                                    <script>
                                    window.alert("Error al enviar email");
                                    </script>
                              <?php }
                          }


                        }
}
?>
