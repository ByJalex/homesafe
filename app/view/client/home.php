<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': compra en línea de productos tecnológicos y más');
?>
<section class="section-main bg padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-md-3">
                <nav class="card">
                    <div id="category_home">
                        <ul class="menu-category">
                            <li v-for="item in allCategory"><a :href="'categories?c='+ item.categoria_p">{{item.categoria_p}}</a></li>
                            <li><a href="<?php echo RUTA_PADRE ?>allCategories"><b>Ver más categorias</b></a></li>
                        </ul>
                    </div>
                </nav>
            </aside> <!-- col.// -->
            <div class="col-md-9">
                <article class="banner-wrap">
                    <img src="<?php echo RUTA_URL ?>public/images/site/banner.jpg" class="w-100 rounded">
                </article>
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- container //  -->
</section>

<section class="section-name padding-y-sm">
    <div class="container">

        <header class="section-heading">
            <a href="#" class="btn btn-outline-primary float-right">Ver todos</a>
            <h3 class="section-title">Productos populares</h3>
        </header><!-- sect-heading -->

        <div class="row" id="prod">
            <div class="loader col-lg-12 text-center m-5" v-if="loaderProduct">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <path fill="none" stroke="#7d7c7c" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                        <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="3.125s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                    </path>
                </svg>
            </div>
            <!--Este producto se ira iterando-->
            <div class="col-md-3" v-for="item in popularProducts">
                <div :href="'product?p='+ item.identificador + '&k=' + item.id_producto" class="card card-product-grid">
                    <a :href="'product?p='+ item.identificador + '&k=' + item.id_producto" class="img-wrap"> <img src="<?php echo RUTA_URL ?>public/images/Products/84850.jpg"> </a>
                    <figcaption class="info-wrap">
                        <a :href="'product?p='+ item.identificador + '&k=' + item.id_producto" @click="" class="title">{{item.Producto}}</a>
                        <div class="price mt-1">${{item.Precio}}</div> <!-- price-wrap.// -->
                        <ul class="rating-stars">
                            <li class="">
                                <i :class="['bx bxs-star' , item.ranking < 1 ? 'text-gray' : 'text-warning']"></i>
                                <i :class="['bx bxs-star' , item.ranking < 2 ? 'text-gray' : 'text-warning']"></i>
                                <i :class="['bx bxs-star' , item.ranking < 3 ? 'text-gray' : 'text-warning']"></i>
                                <i :class="['bx bxs-star' , item.ranking < 4 ? 'text-gray' : 'text-warning']"></i>
                                <i :class="['bx bxs-star' , item.ranking < 5 ? 'text-gray' : 'text-warning']"></i>
                            </li>
                        </ul>
                    </figcaption>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="ml-3">
                            <button @click="add(item.id_producto, 1, item.imagen,item.Producto, item.Precio)" class="btn btn-primary"> <span class="text">Agregar al carrito</span></button>
                        </div>
                        <div class="mr-3 float">
                            <a href="#" class="btn btn-light"><i class='bx bxs-heart'></i></a>
                        </div>

                    </div>
                </div>
            </div> <!-- col.// -->

        </div> <!-- row.// -->



    </div><!-- container // -->
</section>



<section class="section-name padding-y bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Próximamente Home Safe app</h3>
                <p>Nuestro equipo está trabajando arduamente para que tú puedas descargar nuestra app.</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#"><img src="<?php echo RUTA_URL ?>public/images/site/appstore.png" height="40"></a>
                <a href="#"><img src="<?php echo RUTA_URL ?>public/images/site/appstore.png" height="40"></a>
            </div>
        </div> <!-- row.// -->
    </div><!-- container // -->
</section>

<script src="app/core/vue/client/products.js"></script>
<script src="app/core/vue/client/category_home.js"></script>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>