<?php
require_once('../../templates/template.php');
template::header('Home Safe', 0);
?>
<style>
    .satu {
        max-width: auto;
        height: 43vh;
    }

    .dua {
        height: 100%;
        overflow: auto;
    }
</style>
<!--Saltos de linea para contenerdor (Todo el contenido)-->
<br>

<div id="app">
    <div class="site-section">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner item-entry">
                            <div class="carousel-item active">
                                <a href="#" class="product-item md-height bg-gray d-block">
                                    <img src="../../../public/images/prod_2.png" alt="Image" class="img-fluid">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#" class="product-item md-height bg-gray d-block">
                                    <img src="../../../public/images/prod_2.png" alt="Image" class="img-fluid">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#" class="product-item md-height bg-gray d-block">
                                    <img src="../../../public/images/prod_2.png" alt="Image" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span aria-hidden="true"><i class="fas fa-chevron-left text-black"></i></span>
                            <span class="sr-only text-dark">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span aria-hidden="true"><i class="fas fa-chevron-right text-black"></i></span>
                            <span class="sr-only text-dark">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-black">Nombre del producto</h2>
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <div class="star-rating">
                        <span><a href="" class="colora px-2">$90.00</a></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-gray"></span>
                        <span class="icon-star2 text-gray"></span>
                        <span class="icon-star2 text-gray"></span>
                        <span class="icon-star2 text-gray"></span>
                        <span><a href="product.php?id_prod=<?php echo $_GET['id_prod'] ?>" class="p-3 text-black colora">Descripción</a></span>
                    </div>
                    <p class="text-black">Comentarios</p>
                    <div class="satu">
                        <div class="dua">

                            <div class="comment" v-for="resenia in allReviews">
                                <div class="star-rating">
                                    <span :class="['icon-star2' , resenia.estrellas < 1 ? 'text-gray' : 'text-warning']"></span>
                                    <span :class="['icon-star2' , resenia.estrellas < 2 ? 'text-gray' : 'text-warning']"></span>
                                    <span :class="['icon-star2' , resenia.estrellas < 3 ? 'text-gray' : 'text-warning']"></span>
                                    <span :class="['icon-star2' , resenia.estrellas < 4 ? 'text-gray' : 'text-warning']"></span>
                                    <span :class="['icon-star2' , resenia.estrellas < 5 ? 'text-gray' : 'text-warning']"></span>
                                </div>
                                <a href="" class="colora">{{resenia.usu_c}} - </a><span>{{resenia.fecha_comentario}}</span>
                                <p>{{resenia.comentarios}}</p>
                                <hr>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Productos similares</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 block-3">
                    <div class="nonloop-block-3 owl-carousel">
                        <div class="item">
                            <div class="item-entry">
                                <a href="#" class="product-item md-height bg-gray d-block">
                                    <img src="images/model_1.png" alt="Image" class="img-fluid">
                                </a>
                                <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
                                <strong class="item-price"><del>$46.00</del> $28.00</strong>
                                <div class="star-rating">
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-entry">
                                <a href="#" class="product-item md-height bg-gray d-block">
                                    <img src="images/prod_3.png" alt="Image" class="img-fluid">
                                </a>
                                <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
                                <strong class="item-price"><del>$46.00</del> $28.00</strong>

                                <div class="star-rating">
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-entry">
                                <a href="#" class="product-item md-height bg-gray d-block">
                                    <img src="images/model_5.png" alt="Image" class="img-fluid">
                                </a>
                                <h2 class="item-title"><a href="#">Denim Jacket</a></h2>
                                <strong class="item-price"><del>$46.00</del> $28.00</strong>

                                <div class="star-rating">
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="item-entry">
                                <a href="#" class="product-item md-height bg-gray d-block">
                                    <img src="images/prod_1.png" alt="Image" class="img-fluid">
                                </a>
                                <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>
                                <strong class="item-price"><del>$46.00</del> $28.00</strong>
                                <div class="star-rating">
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-entry">
                                <a href="#" class="product-item md-height bg-gray d-block">
                                    <img src="images/model_7.png" alt="Image" class="img-fluid">
                                </a>
                                <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
                                <strong class="item-price">$58.00</strong>
                                <div class="star-rating">
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../../public/js/vue.js"></script>
<script src="../../../public/js/axios.min.js"></script>
<script src="../../resources/js/review.js"></script>
<?php
require_once('../../templates/template.php');
template::footer();
?>