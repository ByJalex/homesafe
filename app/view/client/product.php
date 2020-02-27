<?php
require_once('../../templates/template.php');
template::header('Home Safe', 0);
?>
<!--Saltos de linea para contenerdor (Todo el contenido)-->
<br>

<div class="site-section">
    <div class="container">
        <?php
        require_once('../../controller/viewProductController.php');
        ?>
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

<?php
require_once('../../templates/template.php');
template::footer();
?>