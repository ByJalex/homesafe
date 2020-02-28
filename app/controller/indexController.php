<?php
require_once('../../model/productosIndexModel.php');
#print_r($list);
class indexController
{
    public static function popularProducts()
    {
        $list = productos::prPopulares();
    ?>
        <div class="row">

            <?php
            foreach ($list as $prod) {
            ?>
                <div class="col-lg-4 col-md-6 item-entry mb-4">
                    <a href="product?id_prod=<?php echo $prod['id_producto'] ?>" class="product-item md-height bg-gray d-block">
                        <img src="https://img.freepik.com/free-vector/404-found-vector-flat-concept-illustration_97231-125.jpg?size=338&ext=jpg" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="product.php?id_prod=<?php echo $prod['id_producto'] ?>"><?php echo $prod['Producto'] ?></a></h2>
                    <strong class="item-price">$<?php echo $prod['Precio'] ?></strong>
                    <?php #echo $prod['ranking'] 
                    ?>
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
                        } else if ($prod['ranking'] <= 5) {
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
    }

    public static function showCategory(){
        $list = productos::categ();
        foreach($list as $category){
            ?>
        <div class="item">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="https://opel.navigation.com/static/WFS/Shop-OpelEMEA-Site/-/Shop/en_US/Product%20Not%20Found.png" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#"><?php echo $category['categoria_p']?></a></h2>
            </div>
          </div>
            <?php
        }
        ?>
        <?php
    }
}
?>