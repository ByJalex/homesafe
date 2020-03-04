<?php
require_once('../../templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cupones</h1>
    </div>
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Listado de cupones</h6>
            </div>
            <div class="card-body">

            <div class="row">
                        <div class="col-lg-2">
                            <div class="dropdown mb-4">
                            <button class="btn btn-primary dropdown-toggle mb-4" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ordenar por
                            </button>
                            <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Cantidad</a>
                            <a class="dropdown-item" href="#">Descuento</a>
                            <a class="dropdown-item" href="#">Validez</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                            <form class="form-inline mb-3">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar cupones..." aria-label="Search">
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
                      <th>Descuento</th>
                      <th>Cantidad</th>
                      <th>Validez</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>AKBHDW</td>
                      <td>23%</td>
                      <td>61</td>
                      <td>Activo</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle ">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                        </a></td>
                        </tr>
                    <tr>
                      <td>DWBUW</td>
                      <td>12%</td>
                      <td>63</td>
                      <td>Activo</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>D#YUHDW</td>
                      <td>13%</td>
                      <td>66</td>
                      <td>Activo</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle ">
                        <i class="fas fa-trash"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>#EDQFGFW</td>
                      <td>6%</td>
                      <td>22</td>
                      <td>Activo</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>DKASWu</td>
                      <td>21%</td>
                      <td>33</td>
                      <td>Activo</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>HJFWUWF</td>
                      <td>45%</td>
                      <td>61</td>
                      <td>Activo</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>BYJALEX</td>
                      <td>1%</td>
                      <td>59</td>
                      <td>Activo</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle ">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
                        </a></td>
                        </tr>
                    <tr>
                    </tr>
                    <tr>
                      <td>DWFW$%#</td>
                      <td>31%</td>
                      <td>55</td>
                      <td>Activo</td>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                        </a></td>
                        <td><a href="#" class="btn btn-danger btn-circle">
                        <i class="fas fa-trash"></i>
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
</div>
<?php
Page::footerTemplate();
?>