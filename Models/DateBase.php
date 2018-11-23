<?php

class DateBase
{
  protected $conn;

	public function __construct() {
		$dsn = 'mysql:host=localhost;dbname=AllTech;
		charset=utf8mb4;port=3306';
		$user ="root";
		$pass = "";

		try {
		  $this->conn = new PDO($dsn, $user, $pass);
		} catch (Exception $error) {
		  echo "Error en la conexion " . $error->getMessage();
		}
	}

  function guardarUsuario(Usuario $usuario) {
  		$query = $this->conn->prepare("Insert into usuario values(default, :email,:nombreC,:nombreUsuario, :contrasena,default ,default)");

  		$query->bindValue(":email", $usuario->getEmail());
  		$query->bindValue(":nombreC", $usuario->getNombreC());
  		$query->bindValue(":nombreUsuario", $usuario->getNombreUsuario());
     $query->bindValue(":contrasena", $usuario->getContrasena());

  		$query->execute();

  		$id = $this->conn->lastInsertId();
  		$usuario->setId($id);



  		return $usuario;

  	}

function traerUsuario($usuario){
$consulta=$this->conn->prepare("Select * from usuario where NombreUsuario = :nombre || email = :email");

$consulta->bindValue(":nombre", $usuario);
$consulta->bindValue(":email", $usuario);

$consulta->execute();

$usuarioFormatoArray = $consulta->fetch();

  if ($usuarioFormatoArray) {
    $usuario = new Usuario($usuarioFormatoArray["email"], $usuarioFormatoArray["NombreCompleto"], $usuarioFormatoArray["NombreUsuario"], $usuarioFormatoArray["Contrasena"], $usuarioFormatoArray["id"]);
    return $usuario;
  } else {
    return NULL;
  }



}


}
