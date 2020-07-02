<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$header = template::header(APP_NAME . ': Continuar pagando');
?>
<!--Saltos de linea para contenerdor (Todo el contenido)-->
<br>
<div class="site-section" id="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0" id="pay">
                <h2 class="h3 mb-3 text-black">Detalles de facturación</h2>
                <div class="p-3 p-lg-5 border">
                    <div class="form-group">
                        <label for="c_country" class="text-black">Pais <span class="text-danger">*</span></label>
                        <div>
                            El Salvador
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" v-model="userInformation.nombre_c">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_address" class="text-black">Direccion <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" v-model="userInformation.direccion_c" placeholder="Dirección">
                        </div>
                    </div>
                    <div class="form-group row mb-5">
                        <div class="col-md-6">
                            <label for="c_email_address" class="text-black">Correo Electronico <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" v-model="userInformation.correo_c">
                        </div>
                        <div class="col-md-6">
                            <label for="c_phone" class="text-black">Telefono <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" v-model="userInformation.telefono_c" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Tu pedido</h2>
                        <div class="p-3 p-lg-5 border" id="cart_process"> 
                            <table class="table site-block-order-table mb-5">
                                <thead>
                                    <th>Producto</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in showMyCart">
                                        <td>{{item.nombre}} <strong class="mx-2">x</strong> {{(item.cantidad)}}</td>
                                        <td>${{(item.precio * item.cantidad)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="border p-3 mb-3">
                                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Pagar con tarjeta</a></h3>
                                <div class="collapse" id="collapsebank">
                                    <div class="py-2">
                                        <p class="mb-0">Ingrese su tarjeta de credito o debito</p>
                                        <form action="pay/process_payment.php" method="post" id="payment-form">
                                            <div class="form-row">
                                                <label for="card-element">
                                                    <p class="mb-0"></p>
                                                </label>
                                                <div id="card-element" class="form-control input-lg">
                                                    <!-- A Stripe Element will be inserted here. -->
                                                </div>
                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>
                                            </div>
                                            <div class="p-1">
                                                <button class="btn btn-primary btn-lg btn-block">Realizar pago</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="pay_order">
                                <button data-toggle="modal" data-target="#exampleModalCenter" @click="payOrder" class="btn btn-primary float-right mb-5">Finalizar compra</button>
                            </div>
                            <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="m-5 text-center">
            <div>
            <h5>¡Espere un momento por favor!</h5>
        </div>
        <div>
            <p>Estamos procesando tu compra, porfavor no cierres el navegador.</p>
        </div>
        </div>
      <div class="d-flex justify-content-center mb-5">
          <div class="spinner-border" role="status">
            <div>
                <span class="sr-only">Loading...</span>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="app/core/vue/client/pay.js"></script>
<script src="app/core/vue/client/pay_order.js"></script>
<script src="app/core/vue/client/cart_process.js"></script>

<?php
require_once(RUTA_APP . 'templates/templateClient.php');
$footer = template::footer();
?>