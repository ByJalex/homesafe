<?php
require_once(RUTA_APP . 'templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Empleados</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="container mb-5">
                <table id="tbEmpleados" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Correo</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>telefono</th>
                            <th>Imagen perfil</th>
                            <th>Estado de usuario</th>
                            <th>Tipo de usuario</th>
                            <th>Aciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td>
                            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Garrett</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Ashton</td>
                            <td>Cox</td>
                            <td>Winters</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Cedric</td>
                            <td>Kelly</td>
                            <td>Winters</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Airi</td>
                            <td>Winters</td>
                            <td>Satou</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Brielle</td>
                            <td>Winters</td>
                            <td>Williamson</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Herrod</td>
                            <td>Winters</td>
                            <td>Chandler</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>

                        </tr>
                        <tr>
                            <td>Rhona</td>
                            <td>Winters</td>
                            <td>Davidson</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>

                        </tr>
                        <tr>
                            <td>Colleen</td>
                            <td>Winters</td>
                            <td>Hurst</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Sonya</td>
                            <td>Winters</td>
                            <td>Frost</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    </tbody>
                </table>  
            </div>

<!-- modal agregar -->
<div class="modal fade" id="agregarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Agregar empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre completo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Clave">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
                    </div>
                    <p>Subir imagen</p>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Estado del empleado</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>Activo</option>
                    <option>Inactivo</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo de empleado</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>.</option>
                    <option>.</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Agregar productos</button>
            </div>
            </div>
        </div>
</div>

<!-- modal editar -->
<div class="modal fade" id="editarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Editar empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre completo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Clave">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
                    </div>
                    <p>Subir imagen</p>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Estado del empleado</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>Activo</option>
                    <option>Inactivo</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo de empleado</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>.</option>
                    <option>.</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Editar empleado</button>
            </div>
            </div>
        </div>
</div>  

<!-- modal eliminar -->
<div class="modal fade" id="eliminarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Eliminar empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                <div class="form-group">
                        <h5>¿Desea eliminar este empleado de su lista?</h5>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Eliminar</button>
            </div>
            </div>
        </div>
</div>

</div>
</div>

<?php
Page::footerTemplate();
?>

