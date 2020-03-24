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
            $account = template::profile(2);
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
                            <i class='bx bx-current-location'></i> &nbsp; Mi dirección:
                            <br>
                            San Salvador, 29 av norte colonia zacamil casa #36 &nbsp;
                            <!--<a href="#" class="btn-link"> Edit</a>-->
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

                <article class="card  mb-3">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Recent orders </h5>

                        <div class="row">
                            <div class="col-md-6">
                                <figure class="itemside  mb-3">
                                    <div class="aside"><img src="../../../public/images/Products/84850.jpg" class="border img-sm"></div>
                                    <figcaption class="info">
                                        <time class="text-muted"><i class='bx bx-calendar' ></i> 12.09.2019</time>
                                        <p>Orden #1789</p>
                                        <span class="text-warning">Pendiente</span>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                            <div class="col-md-6">
                                <figure class="itemside  mb-3">
                                    <div class="aside"><img src="../../../public/images/Products/84850.jpg" class="border img-sm"></div>
                                    <figcaption class="info">
                                        <time class="text-muted"><i class='bx bx-calendar' ></i> 12.09.2019</time>
                                        <p>Orden #1789</p>
                                        <span class="text-success">Completa</span>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                            <div class="col-md-6">
                                <figure class="itemside mb-3">
                                    <div class="aside"><img src="../../../public/images/Products/84850.jpg" class="border img-sm"></div>
                                    <figcaption class="info">
                                        <time class="text-muted"><i class='bx bx-calendar' ></i> 12.09.2019</time>
                                        <p>Orden #1789</p>
                                        <span class="text-success">Completa</span>
                                    </figcaption>
                                </figure>
                            </div> <!-- col.// -->
                        </div> <!-- row.// -->

                        <a href="#" class="btn btn-outline-primary"> Ver todas mis ordenes </a>
                    </div> <!-- card-body .// -->
                </article> <!-- card.// -->

            </main> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->
</section>

<?php
require_once('../../templates/templateClient.php');
$footer = template::footer();
?>