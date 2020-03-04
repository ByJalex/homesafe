<?php
require_once('../../templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Productos</h1>
    </div>
    <div class="row">

    
            <div class="card mb-4 col-lg-5">
                    <div class="form-group">
                        <div class="d-flex justify-content-center mt-3"><img src="../../../public/images/googlenset.jpg" alt="google" width="250px" class="img-fluid"></div>
                    </div>
                    <div class="form">
                    <div class="card-body">
                    <input class="form-control " type="text" placeholder="Nombre">
                    <textarea class="form-control mt-3" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion"></textarea>
                    <input class="form-control mt-3" type="text" placeholder="Precio">
                    <input class="form-control mt-3" type="text" placeholder="Modelo">
                    <input class="form-control mt-3" type="text" placeholder="Stock">
                    <label for="exampleFormControlSelect1" class="mt-3">Estado</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>Existencias</option>
                    <option>Agotado</option>
                    </select>
                    <label for="exampleFormControlSelect1" class="mt-3">Categoria</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>Sala</option>
                    <option>Habitacion</option>
                    <option>Baño</option>
                    <option>Cocina</option>
                    <option>Iluminacion interiror</option>
                    <option>Iluminacion exterior</option>
                    <option>Ventanas</option>
                    <option>Seguridad</option>
                    <option>Patio</option>
                    <option>Otros</option>
                    </select>
                    <div class="form-group">
                    <label for="exampleFormControlFile1" class="mt-3">Imagen principal</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <a href="#" class="btn btn-success btn-circle mt-3">
                    <i class="fas fa-check"></i>
                    <a href="#" class="btn btn-warning btn-circle mt-3 ml-3">
                    <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-circle mt-3 ml-3">
                    <i class="fas fa-trash"></i>
                     </a>
                    </a>
                    </div>
                    </div>
            </div>
            <div class="col-lg-7">

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">"Nombre del producto"</h6>
                </div>
                <div class="card-body">
                <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/googlenset.jpg" alt="google" width="100px" class="img-fluid"></div>
                <label for="nombre" class="mt-3 col-lg-3">Modelo:</label>
                <label for="nombre" class="mt-3 col-lg-3">Precio:</label>
                <label for="nombre" class="mt-3 col-lg-3">Descripcion:</label>
                <label for="nombre" class="mt-3 col-lg-3">Stock:</label>
                </div>
              </div>

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">"Nombre del producto"</h6>
                </div>
                <div class="card-body">
                <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/googlenset.jpg" alt="google" width="100px" class="img-fluid"></div>
                <label for="nombre" class="mt-3 col-lg-3">Modelo:</label>
                <label for="nombre" class="mt-3 col-lg-3">Precio:</label>
                <label for="nombre" class="mt-3 col-lg-3">Descripcion:</label>
                <label for="nombre" class="mt-3 col-lg-3">Stock:</label>
                </div>
              </div>

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">"Nombre del producto"</h6>
                </div>
                <div class="card-body">
                <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/googlenset.jpg" alt="google" width="100px" class="img-fluid"></div>
                <label for="nombre" class="mt-3 col-lg-3">Modelo:</label>
                <label for="nombre" class="mt-3 col-lg-3">Precio:</label>
                <label for="nombre" class="mt-3 col-lg-3">Descripcion:</label>
                <label for="nombre" class="mt-3 col-lg-3">Stock:</label>
                </div>
              </div>

        </div>
    </div>
<?php
Page::footerTemplate();
?>