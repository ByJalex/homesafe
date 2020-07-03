<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': Nombre del producto');
?>

<div class="card" id="singleProduct">
    <div class="row no-gutters">
        <aside class="col-md-6">
            <article class="gallery-wrap">
                <div class="img-big-wrap">
                    <div> <a href="#"><img class="img-fluid" src="<?php echo RUTA_URL ?>public/images/Products/84850.jpg"></a></div>
                </div> <!-- slider-product.// -->
                <div class="thumbs-wrap">
                    <a href="#" class="item-thumb"> <img src="<?php echo RUTA_URL ?>public/images/Products/84850.jpg"></a>
                    <a href="#" class="item-thumb"> <img src="<?php echo RUTA_URL ?>public/images/Products/84850.jpg"></a>
                    <a href="#" class="item-thumb"> <img src="<?php echo RUTA_URL ?>public/images/Products/84850.jpg"></a>
                </div> <!-- slider-nav.// -->
            </article> <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-md-6 border-left">
            <!--Inicio del contenido para mostrar producto-->
            <article v-if="loadDataProduct" class="content-body">
                <div class="loader text-center" v-if="loaderProduct">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: 130px;background:#fff;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                        <path fill="none" stroke="#7d7c7c" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                            <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="3.125s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                        </path>
                    </svg>
                </div>
            </article> <!-- product-info-aside .// -->
            <article v-if="products" class="content-body">

                <h2 class="title" v-cloak>{{productInformation.nombre_p}}</h2>

                <div class="rating-wrap my-3">
                    <ul class="rating-stars">
                        <li class="">
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                            <i class='bx bxs-star text-warning'></i>
                        </li>
                    </ul>
                    <small class="label-rating text-muted"><a class="text-a text-primary" @click="changeToComments">Ver comentarios</a></small>
                    <small v-cloak class="label-rating text-success"> <i v-cloak class='bx bxs-cart-download'></i> {{orders.count}} </small>
                </div>

                <div class="mb-3">
                    <var class="price h4" v-cloak>${{productInformation.precio_p}}</var>
                </div>

                <p>{{productInformation.descripcion_p}}</p>


                <dl class="row">
                    <dt class="col-sm-3">Marca:</dt>
                    <dd class="col-sm-9" v-cloak>{{productInformation.nombre_m}}</dd>

                    <dt class="col-sm-3">Modelo:</dt>
                    <dd class="col-sm-9" v-cloak>#{{productInformation.modelo}}</dd>

                    <dt class="col-sm-3">Categoria:</dt>
                    <dd class="col-sm-9" v-cloak>{{productInformation.categoria_p}}</dd>
                </dl>

                <hr>
                <div class="form-row">
                    <div class="form-group col-md flex-grow-0">
                        <label>Cantidad</label>
                        <div class="input-group mb-3 input-spinner">
                            <div class="input-group-prepend">
                                <button class="btn btn-light" type="button" @click="deductSum"> - </button>
                            </div>
                            <input type="text" class="form-control" :value="sum">
                            <div class="input-group-append">
                                <button class="btn btn-light" type="button" @click="sum++"> + </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $parameter = "pay";
                if (isset($_SESSION['id_usuario'])) {
                    $parameter = "pay";
                } else {
                    $parameter = "login";
                }
                ?>
                <a href="<?php echo $parameter ?>" class="btn  btn-primary"> Comprar ahora </a>
                <button @click="add(productInformation.id_producto, 1, productInformation.imagen,productInformation.nombre_p, parseFloat(productInformation.precio_p))" class="btn  btn-outline-primary"> <span class="text">Añadir al carrito</span> <i class='bx bx-cart-alt'></i> </button>
            </article> <!-- product-info-aside .// -->

            <!--Fin del contenido para mostrar producto-->

            <!--Inicio del contenido para mostrar comentarios de producto-->

            <article v-if="comments" class="content-body">
                <h2 class="title" v-cloak>{{productInformation.nombre_p}}</h2>
                <div class="">
                    <small class="label-rating text-muted"><a class="text-a text-primary" @click="changeToInf">Información de producto</a></small>
                    <small v-cloak class="label-rating text-secondary"><i class='bx bxs-comment-dots'></i> {{counterComments}} comentarios </small>
                </div> <!-- rating-wrap.// -->
                <div style="" class="comment-show mt-3">
                    <div v-for="item in allComments" class="comment ">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid rounded" src="https://cdn.dribbble.com/users/369615/screenshots/3485079/anonymus.jpg">
                            </div>
                            <div class="col-10">
                                <b>{{item.usu_c}}</b> - {{item.fecha_comentario}}
                                <div>
                                    {{item.comentarios}}
                                    <div>
                                        <i class='bx bxs-star text-warning'></i> {{item.estrellas}}/5
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="input-group mt-4" id="">
                    <input v-model="sendParams.com" type="text" class="form-control" placeholder="Escribe un comentario" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <!--loadvalidation-->
                        <button data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-primary" type="button">
                            <i v-if="loaderComment" class='bx bxs-send'></i>
                            <i v-else="loaderComment" class='bx bx-loader-alt bx-spin'></i>
                        </button>
                    </div>
                </div>
            </article> <!-- product-info-aside .// -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-center m-5">
                        <h5 class="mt-5">¡Ayudanos a valorar este producto!</h5>
                        <div class="rating-wrap my-3">
                            <ul class="rating-stars">
                                <li class="">
                                    <i @click="selectstar(1)" :class="['bx bxs-star bx-sm' , sendParams.getstar >= 1 ? 'text-warning' : 'text-gray']"></i>
                                    <i @click="selectstar(2)" :class="['bx bxs-star bx-sm' , sendParams.getstar >= 2 ? 'text-warning' : 'text-gray']"></i>
                                    <i @click="selectstar(3)" :class="['bx bxs-star bx-sm' , sendParams.getstar >= 3 ? 'text-warning' : 'text-gray']"></i>
                                    <i @click="selectstar(4)" :class="['bx bxs-star bx-sm' , sendParams.getstar >= 4 ? 'text-warning' : 'text-gray']"></i>
                                    <i @click="selectstar(5)" :class="['bx bxs-star bx-sm' , sendParams.getstar >= 5 ? 'text-warning' : 'text-gray']"></i>
                                </li>
                            </ul>
                        </div>
                        {{sendParams.com}}
                        <button @click="loadValidation" class="mt-4 btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>
            <!--Fin del contenido para mostrar comentarios de producto-->
        </main> <!-- col.// -->
    </div> <!-- row.// -->
</div> <!-- card.// -->



<script src="app/core/vue/client/viewSingleProduct.js"></script>
<script src="app/core/vue/client/comments.js"></script>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>