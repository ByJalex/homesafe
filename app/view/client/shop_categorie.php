<?php
require_once('../../templates/template.php');
template::header('Home Safe', 0);
?>
<!--Saltos de linea para contenerdor (Todo el contenido)-->
<br>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="title-section mb-5 col-12">
        <h2 class="text-uppercase"><?php echo $_GET['categorie']?></h2>
      </div>
    </div>

    <div class="row">

      <div class="col-lg-4 col-md-6 item-entry mb-4">
        <a href="product.php?id_prod=1" class="product-item md-height bg-gray d-block">
          <img src="https://img.freepik.com/free-vector/404-found-vector-flat-concept-illustration_97231-125.jpg?size=338&ext=jpg" alt="Image" class="img-fluid">
        </a>
        <h2 class="item-title"><a href="product.php?id_prod=1">Titulo del producto</a></h2>
        <strong class="item-price">$50.00</strong>
        <div class="star-rating">
          <span class="icon-star2 text-warning"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 item-entry mb-4">
        <a href="product.php?id_prod=1" class="product-item md-height bg-gray d-block">
          <img src="https://img.freepik.com/free-vector/404-found-vector-flat-concept-illustration_97231-125.jpg?size=338&ext=jpg" alt="Image" class="img-fluid">
        </a>
        <h2 class="item-title"><a href="product.php?id_prod=1">Titulo del producto</a></h2>
        <strong class="item-price">$50.00</strong>
        <div class="star-rating">
          <span class="icon-star2 text-warning"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 item-entry mb-4">
        <a href="product.php?id_prod=1" class="product-item md-height bg-gray d-block">
          <img src="https://img.freepik.com/free-vector/404-found-vector-flat-concept-illustration_97231-125.jpg?size=338&ext=jpg" alt="Image" class="img-fluid">
        </a>
        <h2 class="item-title"><a href="product.php?id_prod=1">Titulo del producto</a></h2>
        <strong class="item-price">$50.00</strong>
        <div class="star-rating">
          <span class="icon-star2 text-warning"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 item-entry mb-4">
        <a href="product.php?id_prod=1" class="product-item md-height bg-gray d-block">
          <img src="https://img.freepik.com/free-vector/404-found-vector-flat-concept-illustration_97231-125.jpg?size=338&ext=jpg" alt="Image" class="img-fluid">
        </a>
        <h2 class="item-title"><a href="product.php?id_prod=1">Titulo del producto</a></h2>
        <strong class="item-price">$50.00</strong>
        <div class="star-rating">
          <span class="icon-star2 text-warning"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 item-entry mb-4">
        <a href="product.php?id_prod=1" class="product-item md-height bg-gray d-block">
          <img src="https://img.freepik.com/free-vector/404-found-vector-flat-concept-illustration_97231-125.jpg?size=338&ext=jpg" alt="Image" class="img-fluid">
        </a>
        <h2 class="item-title"><a href="product.php?id_prod=1">Titulo del producto</a></h2>
        <strong class="item-price">$50.00</strong>
        <div class="star-rating">
          <span class="icon-star2 text-warning"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 item-entry mb-4">
        <a href="product.php?id_prod=1" class="product-item md-height bg-gray d-block">
          <img src="https://img.freepik.com/free-vector/404-found-vector-flat-concept-illustration_97231-125.jpg?size=338&ext=jpg" alt="Image" class="img-fluid">
        </a>
        <h2 class="item-title"><a href="product.php?id_prod=1">Titulo del producto</a></h2>
        <strong class="item-price">$50.00</strong>
        <div class="star-rating">
          <span class="icon-star2 text-warning"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
          <span class="icon-star2 text-gray"></span>
        </div>
      </div>

    </div>

  </div>

</div>

<?php
require_once('../../templates/template.php');
template::footer();
?>