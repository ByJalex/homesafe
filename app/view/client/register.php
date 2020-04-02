<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Nombre del producto';
$header = template::header($title);
?>

<section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
    <div class="card mx-auto" style="max-width:520px; margin-top:40px;" id="login">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Registrarse</h4>
            </header>
                <div class="form-row">
                    <div class="col form-group">
                        <label>Nombre</label>
                        <input v-model="dataRegister.nombre" type="text" class="form-control">
                    </div> <!-- form-group end.// -->
                </div> <!-- form-row end.// -->
                <div class="form-group">
                    <label>Correo</label>
                    <input v-model="dataRegister.correo" type="email" class="form-control">
                    <small class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                </div> <!-- form-group end.// -->
                <div class="form-group">
                    <label>Usuario</label>
                    <input v-model="dataRegister.usuario" type="text" class="form-control">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Contraseña</label>
                        <input v-model="dataRegister.clave" class="form-control" type="password">
                    </div> <!-- form-group end.// -->
                    <div class="form-group col-md-6">
                        <label>Repetir contraseña</label>
                        <input v-model="dataRegister.repetirClave" class="form-control" type="password">
                    </div> <!-- form-group end.// -->
                </div>
                <div class="form-group">
                    <button @click="registerUser" type="submit" class="btn btn-primary btn-block"> Registrarse </button>
                </div> <!-- form-group// -->
                <div class="form-group">
                    <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input">
                        <div class="custom-control-label"> Estoy de acuerdo con <a href="#">los terminos y condiciones.</a> </div>
                    </label>
                </div> <!-- form-group end.// -->
        </article><!-- card-body.// -->
    </div> <!-- card .// -->
    <p class="text-center mt-4">¿Ya tienes cuenta? <a href="">Inicia sesión</a></p>
    <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->


</section>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>