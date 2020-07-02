<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$title = 'Ver carrito';
$header = template::header($title);
?>

<div id="cart_process">
    <section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Carrito de compras</h2>
    </div> <!-- container //  -->
</section>

<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <main class="col-md-9">
                <div class="card">
                    <div class="table-responsive" id="cart">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Producto</th>
                                    <th scope="col" width="120">Cantidad</th>
                                    <th scope="col" width="120">Precio</th>
                                    <th scope="col" class="text-right" width="200"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in showMyCart">
                                    <td>
                                        <figure class="itemside">
                                            <div class="aside"><img src="<?php echo RUTA_URL?>public/images/Products/84850.jpg" class="img-sm"></div>
                                            <figcaption class="info">
                                                <a href="#" class="title text-dark">{{item.nombre}}</a>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                        <div class="input-group mb-3 input-spinner">
                            <div class="input-group-prepend">
                                <button class="btn btn-light" type="button" @click="item.cantidad!= 1 ? rest(index, item.cantidad) : ''"> - </button>
                            </div>
                            <input disabled="" type="text" class="form-control" :value="item.cantidad">
                            <div class="input-group-append">
                                <button class="btn btn-light" type="button" @click="sum(index, item.cantidad)"> + </button>
                            </div>
                        </div>
                                    </td>
                                    <td>
                                        <div class="price-wrap">
                                            <var class="price">${{(item.precio * item.cantidad)}}</var>
                                            <small class="text-muted"> ${{item.precio}} Unitario </small>
                                        </div> <!-- price-wrap .// -->
                                    </td>
                                    <td class="text-right">
                                        <!--<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class='bx bxs-heart'></i></a>-->
                                        <button @click="deleteProduct(index)" class="btn btn-light text-danger">Eliminar</button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div  class="card-body border-top">
                        <div v-if="showMyCart == ''" class="text-center m-4">
                            <h3>Carrito de compras vacio</h3>
                        </div>
                        <?php
                $parameter = "pay";
                if (isset($_SESSION['id_usuario'])) {
                    $parameter = "pay";
                } else {
                    $parameter = "login";
                }
                ?>
                        <a v-if="showMyCart != ''" href="<?php echo $parameter ?>" class="btn btn-primary float-md-right"> Realizar compra <i class='bx bx-right-arrow-alt'></i> </a>
                        <a href="home" class="btn btn-light"> <i class='bx bx-left-arrow-alt'></i> Continuar comprando </a>
                    </div>
                </div> <!-- card.// -->

                <div class="alert alert-success mt-3">
                    <p class="icontext"><i class='bx bxs-truck mr-3'></i> Entrega gratuita dentro de 1-2 semanas</p>
                </div>

            </main> <!-- col.// -->
            <aside class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>¿Tienes un cupon?</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="" placeholder="Cupon">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary">Aplicar</button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Precio total:</dt>
                            <dd class="text-right">USD ${{sumarFrutas}}</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Descuento:</dt>
                            <dd class="text-right">USD 0</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right  h5"><strong>${{sumarFrutas}}</strong></dd>
                        </dl>
                        <hr>
                        <p class="text-center mb-3">
                            <!--<img src="images/misc/payments.png" height="26">-->
                        </p>

                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->
            </aside> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->
</section>
</div>

<script src="app/core/vue/client/cart_process.js"></script>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>