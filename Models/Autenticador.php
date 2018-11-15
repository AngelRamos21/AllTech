<?php

require_once('DateBase.php');

class Autenticador
{

  function __construct()
  {
    session_start();

  if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
    $_SESSION["logueado"] = $_COOKIE["logueado"];
  }
  }
  public function loguear($email) {
		$_SESSION["logueado"] = $email;
	}

	public function estaLogueado() {
		return isset($_SESSION["logueado"]);
	}

	public function usuarioLogueado(DateBase $base) {
		if ($this->estaLogueado()) {
			$emailU = $_SESSION["logueado"];
			return $base->traerUsuario($emailU);
		} else {
			return NULL;
		}

	}

	public function logout() {
		session_destroy();
		setcookie("logueado", "", -1);
	}

	public function recordame($email) {
		setcookie("logueado", $email, time() + 3600 * 2);
	}
}
