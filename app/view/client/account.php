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

<section class="section-content padding-y" id="account">
    <div class="container">

        <div class="row">
            <?php
            $account = template::profile(1);
            ?>
            <main class="col-md-9">

                <article class="card mb-3" v-for="list in myInformation">
                    <div class="card-body">

                        <figure class="icontext">
                            <div class="icon">
                                <img class="rounded-circle img-sm border" src="../../../public/images/person_4.jpg">
                            </div>
                            <div class="text">
                                <strong>{{list.nombre_c}}</strong> <br>
                                {{list.correo_c}} <br>
                                <!--<a href="#">Edit</a>-->
                            </div>
                        </figure>
                        <hr>
                        <p>
                            <i class='bx bx-current-location'></i> &nbsp; Mi dirección:
                            <br>
                            {{list.direccion}} &nbsp;
                            <!--<a href="#" class="btn-link"> Edit</a>-->
                            <br>
                            <i class='bx bx-phone'></i> &nbsp;Mi telefono:
                            <br>
                            {{list.telefono}} &nbsp;
                        </p>

                        <article class="card-group">
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">38</h5>
                                    <span>Ordenes</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">5</h5>
                                    <span>Listas de deseos</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">12</h5>
                                    <span>A la espera de la entrega</span>
                                </div>
                            </figure>
                            <figure class="card bg">
                                <div class="p-3">
                                    <h5 class="card-title">50</h5>
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


<script src="../../core/controllers/myAccount.js"></script>

<?php
require_once('../../templates/templateClient.php');
$footer = template::footer();
?>