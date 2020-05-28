<?php
require_once(RUTA_APP . 'templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid" id="brand">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Marcas</h1>
    </div>

    <div class="container mb-4 row">
        <div class="col-lg-3">
            <div class="dropdown no-arrow mb-4">
                <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Paginación
                </button>
                <div  class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <button v-for="item in paginationNumer" @click="getPagination(item.number)" class="dropdown-item" href="#">{{item.number}}</button>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <input type="text" placeholder="Buscar" v-model="searchBrand" class="btn-block">
        </div>
        <div class="col-lg-6 d-flex justify-content-end">
            <button data-toggle="modal" data-target="#addBrand" class="btn btn-info ml-4"><i class="fas fa-plus-square mr-2"></i>Agregar una marca</button>
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
                                    <th scope="col">Nombre de la marca</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in filteredBrand" v-show="(pag - 1) * NUM_RESULTS <= index  && pag * NUM_RESULTS > index">
                                    <td>{{item.nombre_m}}</td>
                                    <td>{{item.imagen_m}}</td>
                                    <td>{{item.descripcion_m}}</td>
                                    <td>
                                        <button data-toggle="modal" data-target="#updateBrand" @click="editbrand(item.nombre_m, item.imagen_m, item.descripcion_m, item.id_marca)" class="btn btn-success mr-2 btn-sm"><i class="fas fa-edit"></i></button>
                                        <button data-toggle="modal" data-target="#deleteBrand" @click="dBrand(item.id_marca)" class="btn-sm btn btn-danger"><i class="fas fa-trash"></i></button></td>
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

                            <li class="page-item" v-show="pag * NUM_RESULTS / allBrands.length < 1" @click.prevent="pag += 1">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de agregar -->
    <div class="modal fade" id="addBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Añadir una marca</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="addBrand">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre marca</label>
                            <input type="text" class="form-control" v-model="addBrand.marca">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Subir imagen</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Elegir archivo</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descripción</label>
                            <textarea class="form-control" rows="3" v-model="addBrand.desc"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success" @click="addbrand">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de update -->
    <div class="modal fade" id="updateBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Actualizar marca</h5>
                    <input type="text" v-model="editMyBrand.id" class="d-none">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="updateBrand">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre marca</label>
                            <input type="text" class="form-control" v-model="editMyBrand.marca">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Subir imagen</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Elegir archivo</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descripción</label>
                            <textarea class="form-control" rows="3" v-model="editMyBrand.desc"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success" @click="updateBrand">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Accion peligrosa</h5>
                    <input type="text" v-model="editMyBrand.id" class="d-none">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Estas seguro que deseas eliminar esta marca?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger" @click="deleteBrand">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="../app/core/vue/admin/brand.js" type="text/javascript"></script>

<?php
Page::footerTemplate();
?>