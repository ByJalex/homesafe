<?php
require_once('../../templates/templateClient.php');
$title = 'Iniciar sesión';
$header = template::header($title);
?>

<section class="section-conten padding-y" style="min-height:84vh" id="">

    <!-- ============================ COMPONENT LOGIN   ================================= -->
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px;" id="login">
        <div class="card-body">
            <h4 class="card-title mb-4">Iniciar sesión</h4>
            <div class="form-group">
                <input class="form-control" placeholder="Correo" v-model="dataUser.correo" type="email">
            </div> <!-- form-group// -->
            <div class="form-group">
                <input class="form-control" placeholder="Contraseña" v-model="dataUser.clave" type="password">
            </div> <!-- form-group// -->

            <div class="form-group">
                <a href="#" class="float-right">¿Olvidaste tu contraseña?</a>
                <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked="">

                </label>
            </div> <!-- form-group form-check .// -->
            <div class="form-group">
                <button @click="loginUser" type="submit" class="btn btn-primary btn-block"> Iniciar sesión </button>
            </div> <!-- form-group// -->
        </div> <!-- card-body.// -->
    </div> <!-- card .// -->

    <p class="text-center mt-4">¿Aún no tienes cuenta? <a href="register.php">Registrate.</a></p>
    <br><br>
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->


</section>


<?php
require_once('../../templates/templateClient.php');
$footer = template::footer();
?>