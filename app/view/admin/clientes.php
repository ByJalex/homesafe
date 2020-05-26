<?php
require_once(RUTA_APP . 'templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="container mb-5">
                <table id="tbClientes" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Correo</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
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
                            <td>  
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td>Garrett</td>
                            <td>Winters</td>
                            <td>Winters</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td>Ashton</td>
                            <td>Cox</td>
                            <td>Winters</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td>Cedric</td>
                            <td>Kelly</td>
                            <td>Winters</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>   
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td>Airi</td>
                            <td>Winters</td>
                            <td>Satou</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td>Brielle</td>
                            <td>Winters</td>
                            <td>Williamson</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>   
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td>Herrod</td>
                            <td>Winters</td>
                            <td>Chandler</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>   
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a></td>

                        </tr>
                        <tr>
                            <td>Rhona</td>
                            <td>Winters</td>
                            <td>Davidson</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a></td>

                        </tr>
                        <tr>
                            <td>Colleen</td>
                            <td>Winters</td>
                            <td>Hurst</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a></td>
                        </tr>
                        <tr>
                            <td>Sonya</td>
                            <td>Winters</td>
                            <td>Frost</td>
                            <td>Garrett</td>
                            <td>Nixon</td>
                            <td>   
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a></td>
                        </tr>
                    </tbody>
                </table>  
            </div>

<!-- modal editar -->
<div class="modal fade" id="editarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Editar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-center">
                <form>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Estado del cliente</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>Activo</option>
                    <option>Desactivado</option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Editar Marca</button>
            </div>
            </div>
        </div>
</div>
            
</div>
</div>

<?php
Page::footerTemplate();
?>

