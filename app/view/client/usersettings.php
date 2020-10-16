<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': Configuración de cuenta');
?>

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Mi cuenta</h2>
    </div> <!-- container //  -->
</section>

<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <?php
            $account = template::profile(4);
            ?>
            <main class="col-md-9">
                <article class="card mb-3">
                    <div class="card-body">
                        <figure class="icontext">
                            <div class="icon">
                                <img class="rounded-circle img-sm border" src="http://localhost/homesafe/public/images/person_3.jpg">
                            </div>
                            <div class="text">
                                <strong> Josue Alfonso Ayala Martinez </strong> <br>
                                ayalavalencia11@gmail.com <br>
                            </div>
                        </figure>
                        <hr>
                        <p>
                            <i class='bx bx-current-location'></i> &nbsp;Mi dirección:
                            <br>
                            San Salvador, 29 av norte colonia zacamil casa #36 &nbsp;
                            <br>
                            <i class='bx bx-phone'></i> &nbsp;Mi telefono:
                            <br>
                            7312-3241 &nbsp;
                        </p>
                </article>
                <article class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Usuario</label>
                                    <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Correo</label>
                                    <input type="email" class="form-control" id="inputPassword4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Nombre completo</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Direccion</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, estado etc...">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Telefono</label>
                                    <input type="text" class="form-control" id="inputAddress2">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Subir foto</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Buscar imagen</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </article>
                <article class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-row" id="pass">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Clave</label>
                                    <input v-model="newpass" type="password" class="form-control" id="inputEmail4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Repetir Clave</label>
                                    <input v-model="repeatPassword" type="password" class="form-control" id="inputPassword4">
                                </div>
                                <p class="form-group ml-2 btn btn-primary" @click="sendPassword">Actualizar
                                    contraseña</p>
                            </div>
                        </form>
                    </div>
                </article>
            </main>
        </div>
    </div>
</section>

<script>
    const pass = new Vue({
        el: '#pass',
        data: {
            newpass: '',
            repeatPassword: ''
        },
        methods: {
            sendPassword() {
                if (this.newpass != this.repeatPassword) {
                    swal("Error", "Las claves no coinciden", "Error");
                } else {
                    axios.get('http://localhost/homesafe/api/auth/updatePassword?password=' + this.repeatPassword)
                        .then(response => {
                            swal("success", "se actualizo la clave!", "success");
                            this.newpass = '',
                            this.repeatPassword = ''
                        })
                }
            }
        }
    })
</script>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>