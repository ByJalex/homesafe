<?php
require_once('../../templates/template.php');
template::header('Home Safe', 1);
?>
<!--Saltos de linea para contenerdor (Todo el contenido)-->
<br><br>
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
        <h2 class="text-uppercase">Productos populares</h2>
      </div>
    </div>
    <?php require_once('../../controller/indexController.php');?>
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
                <img src="../../../public/images/model_1.png" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">Nombre de categoria</a></h2>
            </div>
          </div>

          <div class="item">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="../../../public/images/model_1.png" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">Nombre de categoria</a></h2>
            </div>
          </div>

          <div class="item">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="../../../public/images/model_1.png" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">Nombre de categoria</a></h2>
            </div>
          </div>

          <div class="item">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="../../../public/images/model_1.png" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">Nombre de categoria</a></h2>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once('../../templates/template.php');
template::footer();
?>