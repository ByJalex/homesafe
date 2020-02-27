<?php
require_once('../../model/productosIndexModel.php');
$list = productos::prPopulares();
print_r($list);
?>
<div class="row">

    <?php
    foreach ($list as $prod) {
    ?>
        <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="product.php?id_prod=<?php echo $prod['id_producto'] ?>" class="product-item md-height bg-gray d-block">
                <img src="data:image/png;base64,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" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="product.php?id_prod=<?php echo $prod['id_producto'] ?>"><?php echo $prod['Producto'] ?></a></h2>
            <strong class="item-price"><?php echo $prod['Precio'] ?></strong>
            <?php #echo $prod['ranking'] ?>
            <div class="star-rating">
                <?php if ($prod['ranking'] <= 1) {
                ?>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-gray"></span>
                    <span class="icon-star2 text-gray"></span>
                    <span class="icon-star2 text-gray"></span>
                    <span class="icon-star2 text-gray"></span>
                <?php
                } else if ($prod['ranking'] <= 2) {
                ?>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-gray"></span>
                    <span class="icon-star2 text-gray"></span>
                    <span class="icon-star2 text-gray"></span>
                <?php
                } else if ($prod['ranking'] <= 3) {
                ?>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-gray"></span>
                    <span class="icon-star2 text-gray"></span>
                <?php
                } else if ($prod['ranking'] <= 4) {
                ?>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-gray"></span>
                <?php
                }else if($prod['ranking'] <= 5){
                    ?>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                <?php
                }
                ?>

            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php

?>