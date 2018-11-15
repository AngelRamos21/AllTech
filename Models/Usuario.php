<?php
class Usuario
{
  private $id;
  private $email;
  private $nombreC;
  private $nombreUsuario;
  private $contrasena;



  function __construct($email , $nombreC ,$nombreUsuario, $contrasena, $id=NULL)
  {
    if($id == NULL){

     $this->contrasena= password_hash($contrasena, PASSWORD_DEFAULT);

   }else{
     $this->contrasena= $contrasena;

   }
   $this->id = $id;
   $this->email = $email;
   $this->nombreC = $nombreC;
   $this->nombreUsuario = $nombreUsuario;



  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getContrasena() {
    return $this->contrasena;
  }

  public function setPassword($contrasena) {
    $this->contrasena = $contrasena;
  }

  public function getNombreC() {
    return $this->nombreC;
  }

  public function setEdad($nombreC) {
    $this->nombreC = $nombreC;
  }

  public function getNombreUsuario() {
    return $this->nombreUsuario;
  }

  public function setNombreUsuario($nombreUsuario) {
    $this->nombreUsuario = $nombreUsuario;
  }


}









 ?>
