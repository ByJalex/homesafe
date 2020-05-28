<?php
require_once(RUTA_APP . 'templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid" id="coupon">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cupones</h1>
    </div>

    <div class="container mb-4 row">
        <div class="col-lg-3">
            <div class="dropdown no-arrow mb-4">
                <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Paginación
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <button v-for="item in paginationNumer" @click="getPagination(item.number)" class="dropdown-item" href="#">{{item.number}}</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <input type="text" placeholder="Buscar" v-model="searchCoupon" class="btn-block">
        </div>
        <div class="col-lg-6 d-flex justify-content-end">
            <button data-toggle="modal" data-target="#addCoupon" class="btn btn-info ml-4"><i class="fas fa-plus-square mr-2"></i>Agregar una marca</button>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-5 ">
                    <ul class="list-group">
                    </ul>
                    <div class="table-responsive">
                        <table class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Cupon</th>
                                    <th scope="col">Decuento</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Validez</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr :class="[item.id_validez_c == 3 ? 'text-danger' : 'bg-light']" v-for="(item, index) in filteredCoupon" v-show="(pag - 1) * NUM_RESULTS <= index  && pag * NUM_RESULTS > index">
                                    <td>{{item.cupon}}</td>
                                    <td>{{item.descuento}}</td>
                                    <td>{{item.cantidad}}</td>
                                    <td>{{item.validez}}</td>
                                    <td>
                                        <button data-toggle="modal" data-target="#updateCoupons" @click="editCoupon(item.cupon, item.descuento, item.cantidad, item.id_validez_c, item.id_cupon)" class="btn btn-success mr-2 btn-sm"><i class="fas fa-edit"></i></button>
                                        <button data-toggle="modal" data-target="#deleteCoupons" @click="dCoupon(item.id_cupon)" class="btn-sm btn btn-danger"><i class="fas fa-trash"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h4>pagina: {{pag}}</h4>
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end">
                            <li class="page-item" v-show="pag != 1" @click.prevent="pag -= 1">
                                <a class="page-link" href="#">Atras</a>
                            </li>

                            <li class="page-item" v-show="pag * NUM_RESULTS / allCoupons.length < 1" @click.prevent="pag += 1">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de agregar -->
    <div class="modal fade" id="addCoupon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Añadir una cupon</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="addCoupons">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ingrese su cupon</label>
                            <input type="text" class="form-control" v-model="addCoupons.cupon">
                            <small class="text-info"><a @click="generateNewCoupon">Generar un cupon aleatorio</a></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descuento</label>
                            <input type="text" class="form-control" v-model="addCoupons.descuento" placeholder="Exprese la cantidad con un entero">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cantidad</label>
                            <input type="text" class="form-control" v-model="addCoupons.cantidad">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success" @click="addCoupon">Agregar cupon</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de update -->
    <div class="modal fade" id="updateCoupons" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Actualizar cupon</h5>
                    <input type="text" v-model="editMyCoupon.id" class="d-none">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="updateCoupons">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cupon</label>
                            <input type="text" class="form-control" v-model="editMyCoupon.cupon">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Descuento</label>
                            <input type="text" class="form-control" v-model="editMyCoupon.descuento" placeholder="Exprese la cantidad con un entero">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cantidad</label>
                            <input type="text" class="form-control" v-model="editMyCoupon.cantidad">
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{couponDropdownEstate}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" v-for="(item, index) in couponDropdown" type="button" @click="dropdownCoupon(item.id_validez_c, item.validez)">{{item.validez}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success" @click="updateCoupon">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de eliminar -->
    <div class="modal fade" id="deleteCoupons" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Accion peligrosa</h5>
                    <input type="text" v-model="editMyCoupon.id" class="d-none">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Estas seguro que deseas eliminar esta marca?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger" @click="deleteCoupon">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="../app/core/vue/admin/coupons.js" type="text/javascript"></script>

<?php
Page::footerTemplate();
?>