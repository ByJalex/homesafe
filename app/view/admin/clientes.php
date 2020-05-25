<?php
require_once(RUTA_APP . 'templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Clientes</h1>
    </div>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="dropdown mb-4">
                            <button class="btn btn-primary dropdown-toggle mb-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ordenar por
                            </button>
                            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Apellidos</a>
                            <a class="dropdown-item" href="#">Telefeno</a>
                            <a class="dropdown-item" href="#">Estado</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                            <form class="form-inline mb-3">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar clientes..." aria-label="Search">
                            <a href="#" class="btn btn-success btn-circle">
                                <i class="fas fa-check"></i>
                            </a>
                            </form>
                    </div>

                  
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Usuario</th>
                      <th>Telefono</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Guillermo Cartagena</td>
                      <td>salvadorcartajena@hotmail.com</td>
                      <td>Carta</td>
                      <td>75666222</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle ">
                        <i class="fas fa-edit"></i>
                        </a></td>
                    <tr>
                      <td>Guillermo Cartagena</td>
                      <td>salvadorcartajena@hotmail.com</td>
                      <td>Carta</td>
                      <td>75666222</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                    <tr>
                    </tr>
                    <tr>
                      <td>Guillermo Cartagena</td>
                      <td>salvadorcartajena@hotmail.com</td>
                      <td>Carta</td>
                      <td>75666222</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>Guillermo Cartagena</td>
                      <td>salvadorcartajena@hotmail.com</td>
                      <td>Carta</td>
                      <td>75666222</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>Guillermo Cartagena</td>
                      <td>salvadorcartajena@hotmail.com</td>
                      <td>Carta</td>
                      <td>75666222</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>Guillermo Cartagena</td>
                      <td>salvadorcartajena@hotmail.com</td>
                      <td>Carta</td>
                      <td>75666222</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>Guillermo Cartagena</td>
                      <td>salvadorcartajena@hotmail.com</td>
                      <td>Carta</td>
                      <td>75666222</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle ">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>Guillermo Cartagena</td>
                      <td>salvadorcartajena@hotmail.com</td>
                      <td>Carta</td>
                      <td>75666222</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                  </tbody>
                </table>
                        <nav aria-label="Page navigation example" class="mt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Seguiente</a>
                            </li>
                        </ul>
                    </nav>
              </div>
    </div>
</div>
<?php
Page::footerTemplate();
?>