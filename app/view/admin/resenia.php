<?php
require_once(RUTA_APP . 'templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid" id="review">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Valorizaciones</h1>
    </div>

    <div class="container mb-4 row">
        <div class="col-lg-6">
            <div class="dropdown no-arrow mb-4">
                <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Paginación
                </button>
                <a href="<?php echo RUTA_PADRE ?>privatesite/reportResenia" target="_blank" class="btn btn-primary ml-4">Generar reporte</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <button v-for="item in paginationNumer" @click="getPagination(item.number)" class="dropdown-item" href="#">{{item.number}}</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <input type="text" placeholder="Buscar" v-model="searchReview" class="btn-block">
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
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Estrellas</th>
                                    <th scope="col">Comentario</th>
                                    <th scope="col">Fecha</th>
                                    <!-- <th scope="col">Acciones</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item, index) in filteredReview" v-show="(pag - 1) * NUM_RESULTS <= index  && pag * NUM_RESULTS > index">
                                    <td>{{item.nombre_p}}</td>
                                    <td>{{item.nombre_c}}</td>
                                    <td>{{item.estrellas}}</td>
                                    <td>{{item.comentarios}}</td>
                                    <td>{{item.fecha_comentario}}</td>
                                    <!-- <td>
                                        <button data-toggle="modal" data-target="#updateReview" @click="editReview(item.categoria_p, item.imagen_m, item.id_categoria_p)" class="btn btn-success mr-2 btn-sm"><i class="fas fa-edit"></i></button>
                                        <button data-toggle="modal" data-target="#deleteReview" @click="dReview(item.id_categoria_p)" class="btn-sm btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </td> -->
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

                            <li class="page-item" v-show="pag * NUM_RESULTS / allReviews.length < 1" @click.prevent="pag += 1">
                                <a class="page-link" href="#">Siguiente</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../app/core/vue/admin/review.js" type="text/javascript"></script>

<?php
Page::footerTemplate();
?>