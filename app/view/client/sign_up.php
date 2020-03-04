<?php
require_once('../../templates/template.php');
template::header('Registrarse', 4);
?>
<!--Saltos de linea para contenerdor (Todo el contenido)-->
<div class="container">
    <div class="row justify-content-center align-items-center minh-100">
        <div class="col-lg-6 col-sm-12 d-none d-sm-none d-md-block">
            <img height="auto" class="img-fluid" src="https://www.crucial.com.au/blog/wp-content/uploads/2016/10/capture1.jpg" alt="">
        </div>
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-black">Registrate en HomeSafe</h2>
            <p class="">Create una cuenta para comenzar a comprar.</p>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Clave</label>
                    <input required type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group form-check">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <p class="text-right font-weight-light colora mb-0">¿Olvidaste tu contraseña?</p>
                        </div>
                    </div>
                </div>
                <button  type="submit" class="btn btn-black rounded-0">Registrarse</button>
                <a href="login.php" type="submit" class="btn reg rounded-0">Iniciar sesión</a>
            </form>
        </div>
        
    </div>
</div>

<!--Importar el footer-->
<?php
require_once('../../templates/template.php');
template::footer();
?>