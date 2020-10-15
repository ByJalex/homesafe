<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header('Registro de '.APP_NAME);
?>
<div id="authclient">
    <section class="section-content padding-y">

        <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
            <article class="card-body">
                <header class="mb-4">
                    <h4 class="card-title">Registrarse</h4>
                </header>
                <div class="form-row">
                    <div class="col form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" v-model="register.nombre">
                    </div> <!-- form-group end.// -->
                </div> <!-- form-row end.// -->
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" v-model="register.correo">
                    <small class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
                </div> <!-- form-group end.// -->
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" v-model="register.usuario">
                </div>
                <div class="form-group">
                    <label>Direccion</label>
                    <input type="text" class="form-control" v-model="register.direccion">
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="number" class="form-control" v-model="register.telefono">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Contraseña</label>
                        <input v-on:keyup="verifyPassword()" class="form-control" type="password"
                            v-model="register.clave">
                    </div> <!-- form-group end.// -->
                    <div class="form-group col-md-6">
                        <label>Repetir contraseña</label>
                        <input class="form-control" type="password" v-model="repeatPass">
                    </div> <!-- form-group end.// -->
                </div>
                <small :class="textPasswordValidity">{{textPasswordVerify}}</small>
                <div class="form-group">
                    <button @click="reg" class="btn btn-primary btn-block"> Registrarse </button>
                </div> <!-- form-group// -->
                <div class="form-group">
                    <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input">
                        <div class="custom-control-label"> Estoy de acuerdo con <a href="#">los términos y
                                condiciones.</a> </div>
                    </label>
                </div> <!-- form-group end.// -->
            </article><!-- card-body.// -->
        </div> <!-- card .// -->
        <p class="text-center mt-4">¿Ya tienes cuenta? <a href="">Inicia sesión</a></p>
        <br><br>
        <!-- ============================ COMPONENT REGISTER  END.// ================================= -->


    </section>
</div>
<script src="<?php echo RUTA_PADRE ?>app/core/vue/client/auth.js" type="text/javascript"></script>
<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>