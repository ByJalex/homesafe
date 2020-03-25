<?php
require_once('../../templates/templateClient.php');
$title = 'Mi cuenta';
$header = template::header($title);
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
                                <img class="rounded-circle img-sm border" src="../../../public/images/person_4.jpg">
                            </div>
                            <div class="text">
                                <strong> Josue Alfonso Ayala Martinez </strong> <br>
                                ayalavalencia11@gmail.com <br>
                                <!--<a href="#">Edit</a>-->
                            </div>
                        </figure>
                        <hr>
                        <p>
                            <i class='bx bx-current-location'></i> &nbsp;Mi dirección:
                            <br>
                            San Salvador, 29 av norte colonia zacamil casa #36 &nbsp;
                            <!--<a href="#" class="btn-link"> Edit</a>-->
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
                                    <label for="inputPassword4">Contraseña</label>
                                    <input type="password" class="form-control" id="inputPassword4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Nombre completo</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Correo</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="ejemplo@gmail.com">
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

                            <button type="submit" class="btn btn-primary">Actualizar información</button>
                        </form>
                    </div>
                </article>
            </main>
        </div>

    </div>
</section>

<?php
require_once('../../templates/templateClient.php');
$footer = template::footer();
?>