<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': Mis ordenes');
?>

<div id="personal_inf">
    <section class="section-pagetop bg">
        <div class="container">
            <h2 class="title-page">Mi cuenta</h2>
        </div> <!-- container //  -->
    </section>

    <section class="section-content padding-y">
        <div class="container">

            <div class="row">
                <?php
                $account = template::profile(2);
                ?>
                <main class="col-md-9">
                    <article class="card  mb-3">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Ordenes recientes ( <span class="text-success">{{OrdersClient.length}}</span> )</h5>

                            <div class="loader col-lg-12 text-center m-5" v-if="loaderOrders">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                    <path fill="none" stroke="#7d7c7c" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                                        <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="3.125s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                                    </path>
                                </svg>
                            </div>

                            <div class="row">

                                <div class="col-md-6" v-for="(item, index) in OrdersClient" v-show="(pag - 1) * NUM_RESULTS <= index  && pag * NUM_RESULTS > index">
                                    <figure class="itemside  mb-3">
                                        <figcaption class="info">
                                            <time class="text-muted"><i class='bx bxs-user'></i></i>Nombre del cliente: {{item.nombre_c}}</time>
                                            <p>Orden# {{item.id_venta}}</p>
                                            <time class="text-muted"><i class='bx bx-calendar'></i>Fecha del pedido creado: {{item.fecha}}</time><br>
                                            <time class="text-muted"><i class='bx bx-calendar'></i>Fecha de entrega del pedido {{item.fecha_entrega}}</time>
                                            <p>Total de la orden: ${{item.total}}</p>
                                            <span class="text-success">Estado de la venta: {{item.estado_venta}}</span><br>
                                            <button @click="getDetailOrders(item.id_venta)" class="btn btn-primary mt-2 mb-2" data-toggle="modal" data-target="#detalleVenta">Ver detalle del pedido</button>
                                            <!-- -->
                                        </figcaption>
                                    </figure>
                                </div> <!-- col.// -->

                            </div> <!-- row.// -->
                         <h4>pagina: {{pag}}</h4>
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end">
                            <li class="page-item" v-show="pag != 1" @click.prevent="pag -= 1">
                                <a class="page-link" href="#">Atras</a>
                            </li>

                            <li class="page-item"  v-show="pag * NUM_RESULTS / OrdersClient.length < 1" @click.prevent="pag += 1">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                    </article> <!-- card.// -->

                </main>
                <!-- col.// -->

                <!-- modal del detalle_venta -->
                <div class="modal fade" id="detalleVenta" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <h5 class="modal-title" id="staticBackdropLabel">Detalle de la venta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body border-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre del producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Precio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="loader col-lg-12 text-center m-5" v-if="loaderDetailOrders">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                                <path fill="none" stroke="#7d7c7c" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.8);transform-origin:50px 50px">
                                                    <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="3.125s" keyTimes="0;1" values="0;256.58892822265625"></animate>
                                                </path>
                                            </svg>
                                        </div>
                                        <tr v-for="item in DetailOrder">
                                            <td>{{item.nombre_p}}</td>
                                            <td>{{item.cantidad}}</td>
                                            <td>{{item.precio_unitario}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer border-0">
                                <button @click="deleteDetailOrder" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div> <!-- container .//  -->
    </section>
</div>

<script src="<?php echo RUTA_PADRE ?>app/core/vue/client/personal_inf.js"></script>
<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>