<?php
require_once('../../model/productModel.php');
$asd = product::viewProduct($_GET['id_prod']);
?>
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
                <spanaria-hidden="true"><i class="fas fa-chevron-right text-black"></i></span>
                    <span class="sr-only text-dark">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-6">
        <h2 class="text-black"><?php echo $asd['nombre_p']?></h2>
        <div class="star-rating">
            <span class="icon-star2 text-warning"></span>
            <span class="icon-star2 text-warning"></span>
            <span class="icon-star2 text-warning"></span>
            <span class="icon-star2 text-warning"></span>
            <span class="icon-star2 text-warning"></span>
            <span><a href="" class="p-3 text-black colora">Reseñas</a></span>
        </div>
        <p><?php echo $asd['descripcion_p']?></p>
        <!--<p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum hic magni iste, velit aperiam quis.</p>-->
        <p><strong class="text-primary h4">$<?php echo $asd['precio_p']?></strong></p>
        <div class="mb-5">
            <div class="input-group mb-3" style="max-width: 120px;">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
            </div>

        </div>
        <p><a href="cart.html" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>

    </div>
</div>
<?php


?>