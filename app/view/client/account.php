<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': compra en línea de productos tecnológicos y más');
?>

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Mi cuenta</h2>
    </div> <!-- container //  -->
</section>

<div id="personal_inf">
    <section class="section-content padding-y" id="account">
    <div class="container">

        <div class="row">
            <?php
            $account = template::profile(1);
            ?>
            <main class="col-md-9">
                <article class="card mb-3">
                    <div class="card-body">
                        <figure class="icontext">
                            <div class="icon">
                                <img class="rounded-circle img-sm border" src="https://s3-us-west-2.amazonaws.com/usedphotosna/80919519_934.jpg">
                            </div>
                            <div class="text">
                                <strong>{{userInformation.nombre_c}}</strong> <br>
                                {{userInformation.correo_c}} <br>
                                <!--<a href="#">Edit</a>-->
                            </div>
                        </figure>
                        <hr>
                        <p>
                            <i class='bx bx-current-location'></i> &nbsp; Mi dirección:
                            <br>
                            {{userInformation.direccion_c}} &nbsp;
                            <!--<a href="#" class="btn-link"> Edit</a>-->
                            <br>
                            <i class='bx bx-phone'></i> &nbsp;Mi telefono:
                            <br>
                            {{userInformation.telefono_c}} &nbsp;
                        </p>

                        <article class="card-group">
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">{{orders.count}}</h5>
                                    <span>Ordenes</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">{{wishList}}</h5>
                                    <span>Listas de deseos</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">{{pendingorders.count}}</h5>
                                    <span>Pendiente</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">{{counter}}</h5>
                                    <span>Artículos comprados</span>
                                </div>
                            </figure>
                        </article>


                    </div> <!-- card-body .// -->
                </article> <!-- card.// -->

            </main> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->
</section>
</div>

<script src="<?php echo RUTA_PADRE ?>app/core/vue/client/personal_inf.js"></script>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>