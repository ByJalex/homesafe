<?php
require_once('../../templates/template.php');
template::header('Home Safe', 0);
?>

<link rel="stylesheet" href="../../../public/css/stripe.css">
<!--Saltos de linea para contenerdor (Todo el contenido)-->
<br>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Detalles de facturación</h2>
                <div class="p-3 p-lg-5 border">
                    <div class="form-group">
                        <label for="c_country" class="text-black">Pais <span class="text-danger">*</span></label>
                        <select id="c_country" class="form-control">
                            <option value="1">Seleccionar un pais</option>
                            <option value="2">bangladesh</option>
                            <option value="3">Algeria</option>
                            <option value="4">Afghanistan</option>
                            <option value="5">Ghana</option>
                            <option value="6">Albania</option>
                            <option value="7">Bahrain</option>
                            <option value="8">Colombia</option>
                            <option value="9">El Salvador</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_fname" class="text-black">Primer Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_fname" name="c_fname">
                        </div>
                        <div class="col-md-6">
                            <label for="c_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_lname" name="c_lname">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_address" class="text-black">Direccion <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Dirección">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Apartamento, suite, unidad, etc. (opcional)">
                    </div>

                    <div class="form-group row mb-5">
                        <div class="col-md-6">
                            <label for="c_email_address" class="text-black">Correo Electronico <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                        </div>
                        <div class="col-md-6">
                            <label for="c_phone" class="text-black">Telefono <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Código promocional</h2>
                        <div class="p-3 p-lg-5 border">

                            <label for="c_code" class="text-black mb-3">Ingrese su código de cupón si tiene uno.</label>
                            <div class="input-group w-75">
                                <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">Aplicar</button>
                                </div>
                            </div>
                            <label for="c_code" class="text-danger mb-3 d-none">Cupon no valido.</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Tu pedido</h2>
                        <div class="p-3 p-lg-5 border">
                            <table class="table site-block-order-table mb-5">
                                <thead>
                                    <th>Producto</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Google Nest <strong class="mx-2">x</strong> 1</td>
                                        <td>$250.00</td>
                                    </tr>
                                    <tr>
                                        <td>Google Wifi <strong class="mx-2">x</strong> 1</td>
                                        <td>$100.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black font-weight-bold"><strong>Subtotal del carrito</strong></td>
                                        <td class="text-black">$350.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-black font-weight-bold"><strong>Total del pedido</strong></td>
                                        <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://js.stripe.com/v3/"></script>
<script src="../../../public/js/stripe.js"></script>
<?php
require_once('../../templates/template.php');
template::footer();
?>