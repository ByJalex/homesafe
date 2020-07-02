<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': Mi cuenta');
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
                <div class="loader col-lg-12 text-center m-5" v-if="loaderOfAllContent">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <path fill="none" stroke="#7d7c7c" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                        <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="3.125s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                    </path>
                </svg>
            </div>
                <article class="card mb-3" v-else="loaderOfAllContent">
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
                                    <h5 class="card-title">{{countOrders}}</h5>
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