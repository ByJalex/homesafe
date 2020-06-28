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
                            <li v-for = "item in allCategory"><a 
                            :href="'categories?c='+ item.categoria_p"
                                >{{item.categoria_p}}</a></li>
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