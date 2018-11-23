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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
		<script src="https://unpkg.com/ionicons@4.4.7/dist/ionicons.js"></script>

  </head>

  <body>
    <header class="p15">

      <div class="row justify-content-center ">
           <div class="col-md-12 col-lg-10 ">
                <div class=" row align-items-center  ">
									<a class="titulo"href="" method=""><h1 class="titulo">AllTech</h1></a>
                    <div  class=" col-md-4 col-sm-2 mt-3	">
											 <form action="" class="search-form ">
									         <div class="form-group has-feedback">
									        	<span class="glyphicon glyphicon-search form-control-feedback"><ion-icon name="search"></ion-icon></span>
									        	<input type="text" class="form-control" name="search" id="search" placeholder="Buscar">
								          	<label for="search" class="sr-only">Search</label>
							             	</div>
				         			 </form>
                   </div>



                   <div class="col-6	">
										 <ul class="navBar nav justify-content-end grey lighten-4 ">
  <li class="nav-item">
    <a class="nav-link active" href="#!">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#!"><?php echo $usuario->getNombreUsuario(); ?></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#!">Notificaciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#!">Configuracion</a>
  </li>
	<li class="nav-item">
    <a class="nav-link disabled"  href="salir.php" style="text-decoration:none;"> <span><ion-icon style="font-size:20px;"name="exit"></ion-icon></span>	  </a>
	</li>
</ul>

                   </div>




                  <div class=" col-md-2 ">

                  </div>

              </div>

            </div>

    </div>
    </header>


      <section class="p15 mt-1">
        <div class="row justify-content-center">
          <div class=" col-md-10">
            <div class="row align-items-center justify-content-center">
              <article class="col-md-7 ">

                    <div class="img1">
                    <img src="images/pc.jpg">

                    </div>

              </article>
              <aside class="col-md-5">
                    <div class="info">

                        <h3>titulo</h3>
                        <h6>ninguno</h6>

                      <h3>experiencia laboral</h3>
                      <h6>ninguna</h6>


                      <div class="">


                      </div>

                    </div>
                  </aside>
            </div>


          </div>

        </div>


    </section>


        <footer class="p15">
                <div class="row justify-content-center">
                  <div class="delimitar col-md-10">


                             <div class="coment">
                            <div class="col-md-2">

                            </div>

                             <form action="documento.php" method="POST">
                                    <img href="">
                                    <input type="text" name="comentarios" value="" placeholder="comparti tus ideas">
                                    <button type="submit" class="btn btn-dark">comentar</button>
                              </form>
                             </div>
                     <div class="muro">
                       <a type="text" method"_POST"></a>



                     </div>



                </div>
              </div>
      </footer >
			    <script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
    <script src="js/jquery.js"> </script>
    <script src="js/bootstrap.min.js"></script>
    <script>

    </script>
  </body>





  </html>
