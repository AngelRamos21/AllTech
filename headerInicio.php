<header class="p15">
        <div class="row justify-content-center ">
            <div class="col-md-12 col-lg-10  ">
              <div class="row align-items-center justify-content-center   ">
                       <div class="tituloCell col-sm-12 col-md-1">
                          <a class="titulo"href="index.php" > <h1 class="titulo">AllTech</h1></a>
                       </div>

                       <div class="logueoCol col-sm-12 col-md-11 text-right ">
                           <form class="logueoForm  " action="index.php" method="post">
                                <span style="color:red;font-size:12px; position:relative;"><?php echo $erroresL['nombreL']; ?></span>
                                 <input class="" type="text" name="nombreL" value="<?php echo $nombreL; ?>" placeholder=" Nombre de Usuario">

                                 <span style="color:red;font-size:12px;"><?php echo $erroresL['contrasenaL']; ?></span>
                                <input class="" type="password" name="contrasenaL" value="" placeholder="  Contraseña">

                                 <input type="hidden" name="form" value="login">
                                 <button type="submit" class="btn btn-default btn-sm"><span> Iniciar Sesión</span> </button>
                                    <br>
                               <input class="recordameInput" type="checkbox" name="recordar"><span class="recordameSpan">Recordar contraseña</span>
                               <br>
                                 <a href="recuperarContraseña.php">¿La olvidaste?</a>

                           </form>

                      </div>
                      <div class="logueoBtn col-12 text-center d-md-none">
                          <a href="#">¿No tienes una cuenta?</a>
                          <br>
                      <button type="button" class=" btn-sm "><span> Crear una cuenta</span> </button>
                      </div>
              </div>


            </div>


        </div>


</header>
