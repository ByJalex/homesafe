<?php
require_once(RUTA_APP . 'templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid" id="client">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
    </div>

    <div class="container mb-4 row">
        <div class="col-lg-6">
            <div class="dropdown no-arrow mb-4">
                <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Paginación
                </button>
                <a href="<?php echo RUTA_PADRE ?>privatesite/reportCliente" target="_blank" class="btn btn-primary ml-4">Generar reporte</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <button v-for="item in paginationNumer" @click="getPagination(item.number)" class="dropdown-item" href="#">{{item.number}}</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <input type="text" placeholder="Buscar" v-model="searchClient" class="btn-block">
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
                                    <th scope="col">Correo</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Usuario</th>
                                    <!-- <th scope="col">Dirección</th> -->
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr :class="[item.id_estado_user == 1 ? 'bg-light' : 'text-danger']" v-for="(item, index) in filteredClient" v-show="(pag - 1) * NUM_RESULTS <= index  && pag * NUM_RESULTS > index">
                                    <td>{{item.correo_c}}</td>
                                    <td>{{item.nombre_c}}</td>
                                    <td>{{item.usu_c}}</td>
                                    <!-- <td>{{item.direccion_c}}</td> -->
                                    <td>{{item.telefono_c}}</td>
                                    <td>
                                        <button data-toggle="modal" data-target="#saleDetail" @click="getSaleDetail(item.id_cliente)" class="btn btn-success mr-2 btn-sm"><i class="fas fa-eye"></i></button>
                                        <button data-toggle="modal" data-target="#updateClients" @click="editClient(item.correo_c, item.nombre_c, item.id_cliente , item.usu_c, item.direccion_c, item.telefono_c, item.imagen_c, item.id_estado_user, item.estado_user)" class="btn btn-warning mr-2 btn-sm"><i class="fas fa-edit"></i></button>
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

                            <li class="page-item" v-show="pag * NUM_RESULTS / allClients.length < 1" @click.prevent="pag += 1">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de update -->
    <div class="modal fade" id="updateClients" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Visualizar cliente</h5>
                    <input type="text" v-model="editMyClient.id" class="d-none">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Nombre: </strong>{{editMyClient.nombre_c}}</p>
                    <p><strong>Correo: </strong>{{editMyClient.correo_c}}</p>
                    <p><strong>Direccion: </strong>{{editMyClient.direccion_c}}</p>
                    <p><strong>Usuario: </strong>{{editMyClient.usu_c}}</p>
                    <p><strong>Telefono: </strong>{{editMyClient.telefono_c}}</p>
                    <p><strong>Estado: </strong>{{editMyClient.id_estado_user}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <!-- <button type="button" class="btn btn-success" @click="updateClient">Guardar cambios</button> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de viewDetailSale -->
    <div class="modal fade" id="saleDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pedidos realizados</h5>
                    <input type="text" v-model="editMyClient.id" class="d-none">
                    <button @click="clearArray" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Detalle de pedidos
                    <div>
                        <input type="text" class="form-control" placeholder="filtrar por fecha" v-model="searchDetail">
                    </div>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio unitario</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in filteredDetail">
                                <td>{{item.nombre_p}}</td>
                                <td>{{item.cantidad}}</td>
                                <td>{{item.precio_unitario}}</td>
                                <td>{{item.fecha}}</td>
                                <td>${{item.total}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" @click="clearArray">Cerrar</button>
                    <!-- <button type="button" class="btn btn-success" @click="updateClient">Guardar cambios</button> -->
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../app/core/vue/admin/client.js" type="text/javascript"></script>
<?php
Page::footerTemplate();
?>