<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME.' inicia sesión');
?>

<div id="">
    <section class="section-conten padding-y" style="min-height:84vh" id="authclient">

    <!-- ============================ COMPONENT LOGIN   ================================= -->
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
        <div class="card-body">
            <h4 class="card-title mb-4">Iniciar sesión</h4>
            <div class="form-group">
                <input class="form-control" placeholder="Nombre de usuario" v-model="authData.user" type="email">
            </div> <!-- form-group// -->
            <div class="form-group">
                <input class="form-control" placeholder="Contraseña" v-model="authData.password" type="password">
                
            </div> <!-- form-group// -->

            <div class="form-group">
                <a href="#" class="float-right">¿Olvidaste tu contraseña?</a>
                <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked="">
                </label>
            </div> <!-- form-group form-check .// -->
            <div class="form-group">    
                <button @click="log" type="submit" class="btn btn-primary btn-block">{{button}}</button>
            </div> <!-- form-group// -->
        </div> <!-- card-body.// -->
    </div> <!-- card .// -->

    <p class="text-center mt-4">¿Aún no tienes cuenta? <a href="register">Registrate.</a></p>
    <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->
    </section>
</div>

<script src="app/core/vue/client/auth.js"></script>
<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>