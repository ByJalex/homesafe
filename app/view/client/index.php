<?php
require_once('../../templates/template.php');
template::header('Home Safe', 1);
?>
<!--Saltos de linea para contenerdor (Todo el contenido)-->
<br><br>
<div id="app">
  <div class="site-blocks-cover" data-aos="">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto order-md-2 align-self-start">
          <div class="site-block-cover-content">
            <h2 class="sub-title">#ENTERATE DE NUESTROS PRODUCTOS</h2>
            <h1>MAS RECIENTES</h1>
            <p><a href="news.php" class="btn btn-black rounded-0">Ver ahora</a></p>
          </div>
        </div>
        <div class="col-md-6 order-1 align-self-end">
          <img src="../../../public/images/site/index_imag.png" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="title-section mb-5 col-12">
          <h2 class="text-uppercase">Productos mas comprados</h2>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6 item-entry mb-4" v-for="prod in allProductsPopular">
          <a :href="redirectPopularProduct(prod.id_producto)" class="product-item md-height bg-gray d-block">
            <img src="https://img.freepik.com/free-vector/404-found-vector-flat-concept-illustration_97231-125.jpg?size=338&ext=jpg" alt="Image" class="img-fluid">
          </a>
          <h2 class="item-title"><a :href="redirectPopularProduct(prod.id_producto)">{{prod.Producto}}</a></h2>
          <strong class="item-price">${{prod.Precio}}</strong>
          <div class="star-rating">
            <span :class="['icon-star2' , prod.ranking < 1 ? 'text-gray' : 'text-warning']"></span>
            <span :class="['icon-star2' , prod.ranking < 2 ? 'text-gray' : 'text-warning']"></span>
            <span :class="['icon-star2' , prod.ranking < 3 ? 'text-gray' : 'text-warning']"></span>
            <span :class="['icon-star2' , prod.ranking < 4 ? 'text-gray' : 'text-warning']"></span>
            <span :class="['icon-star2' , prod.ranking < 5 ? 'text-gray' : 'text-warning']"></span>
          </div>
        </div>


      </div>

    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center mb-5 col-12">
            <h2 class="text-uppercase">Categorias</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">

              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="https://opel.navigation.com/static/WFS/Shop-OpelEMEA-Site/-/Shop/en_US/Product%20Not%20Found.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Titulo de la categoria</a></h2>
                </div>
              </div>

              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="https://opel.navigation.com/static/WFS/Shop-OpelEMEA-Site/-/Shop/en_US/Product%20Not%20Found.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Titulo de la categoria</a></h2>
                </div>
              </div>

              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="https://opel.navigation.com/static/WFS/Shop-OpelEMEA-Site/-/Shop/en_US/Product%20Not%20Found.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Titulo de la categoria</a></h2>
                </div>
              </div>

              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="https://opel.navigation.com/static/WFS/Shop-OpelEMEA-Site/-/Shop/en_US/Product%20Not%20Found.png" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Titulo de la categoria</a></h2>
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
<script src="../../resources/js/products.js"></script>
<?php
require_once('../../templates/template.php');
template::footer();
?>