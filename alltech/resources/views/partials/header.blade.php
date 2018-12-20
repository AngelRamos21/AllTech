<header class="p15">
        <div class="row justify-content-center ">
            <div class="col-md-12 col-lg-10  ">
              <div class="row align-items-center justify-content-center   ">
                       <div class="tituloCell col-sm-12 col-md-1">
                          <a class="titulo"href="/index" > <h1 class="titulo">AllTech</h1></a>
                       </div>

                       <div class="logueoCol col-sm-12 col-md-11 text-right ">
                           <form class="logueoForm  " action="{{ route('login') }}" method="post">
                                  @csrf
                                  <span class="" style="font-size:10px; color:red;">
                                        @if ($errors->has('email'))
                                          {{ $errors->first('email') }}
                                        @endif
                                 </span>
                                 <input class=" {{ $errors->has('email') ? 'is-invalid' : null }}" value="{{ old('email') }}" type="text" name="email" placeholder=" Nombre de Usuario">
                                 @if ($errors->has('password'))
                                     <span style="font-size:10px; color:red;">
                                         {{ $errors->first('password') }}
                                     </span>
                                 @endif


                                <input class="{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" value="" placeholder="  Contraseña">




                                 <input type="hidden" name="form" value="login">
                                 <button type="submit" class="btn btn-default btn-sm"><span> Iniciar Sesión</span> </button>
                                    <br>
                               <input class="recordameInput" type="checkbox" name="recordar"><span class="recordameSpan">Recordar contraseña</span>
                               <br>
                                 <a href="/recuperarContraseña">¿La olvidaste?</a>

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
