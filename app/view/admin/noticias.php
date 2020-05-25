<?php
require_once(RUTA_APP . 'templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Noticias</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="container mb-5">
                <table id="tbNoticias" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Titulo de noticia</th>
                            <th>Noticia</th>
                            <th>Imagen</th>
                            <th>Estado de la noticia</th>
                            <th>Aciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger</td>
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
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Ashton</td>
                            <td>Cox</td>
                            <td>Winters</td>
                            <td>Garrett</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Cedric</td>
                            <td>Kelly</td>
                            <td>Winters</td>
                            <td>Garrett</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Airi</td>
                            <td>Winters</td>
                            <td>Satou</td>
                            <td>Garrett</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Brielle</td>
                            <td>Winters</td>
                            <td>Williamson</td>
                            <td>Garrett</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Herrod</td>
                            <td>Winters</td>
                            <td>Chandler</td>
                            <td>Garrett</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>

                        </tr>
                        <tr>
                            <td>Rhona</td>
                            <td>Winters</td>
                            <td>Davidson</td>
                            <td>Garrett</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>

                        </tr>
                        <tr>
                            <td>Colleen</td>
                            <td>Winters</td>
                            <td>Hurst</td>
                            <td>Garrett</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td>Sonya</td>
                            <td>Winters</td>
                            <td>Frost</td>
                            <td>Garrett</td>
                            <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#agregarmodal"><i class="fas fa-plus-square"></i></a>    
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editarmodal"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#eliminarmodal"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    </tbody>
                </table>  
            </div>
        </div>

<?php
Page::footerTemplate();
?>

