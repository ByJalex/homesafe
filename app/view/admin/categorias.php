<?php
require_once('../../templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categorias</h1>
    </div>
    <div class="row">
        <div class="col-lg-6">
        <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar categoria</h6>
        </div>
        <div class="card-body">
        <input class="form-control mt-3" type="text" placeholder="Nombre de la categoria">
        <div class="form-group">
        <label for="exampleFormControlFile1" class="mt-3">Imagen categoria</label>
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
    <div class="col-lg-3">
        <div class="card shadow mb-4">
        <div class="card-body">
        <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/sala-6.jpg" alt="google" width="100px" class="img-fluid"></div>
        <label for="nombre" class="mt-3 col-lg-12">Categoria:</label>
        </div>
        </div>

        <div class="card shadow mb-4">
        <div class="card-body">
        <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/sala-6.jpg" alt="google" width="100px" class="img-fluid"></div>
        <label for="nombre" class="mt-3 col-lg-12">Categoria:</label>
        </div>
        </div>

        <div class="card shadow mb-4">
        <div class="card-body">
        <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/sala-6.jpg" alt="google" width="100px" class="img-fluid"></div>
        <label for="nombre" class="mt-3 col-lg-12">Categoria:</label>
        </div>
        </div>
        <nav aria-label="Page navigation example">
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
    <div class="col-lg-3">
        <div class="card shadow mb-4">
        <div class="card-body">
        <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/sala-6.jpg" alt="google" width="100px" class="img-fluid"></div>
        <label for="nombre" class="mt-3 col-lg-12">Categoria:</label>
        </div>
        </div>

        <div class="card shadow mb-4">
        <div class="card-body">
        <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/sala-6.jpg" alt="google" width="100px" class="img-fluid"></div>
        <label for="nombre" class="mt-3 col-lg-12">Categoria:</label>
        </div>
        </div>

        <div class="card shadow mb-4">
        <div class="card-body">
        <div class="d-flex justify-content-star mt-3 mb-3"><img src="../../../public/images/sala-6.jpg" alt="google" width="100px" class="img-fluid"></div>
        <label for="nombre" class="mt-3 col-lg-12">Categoria:</label>
        </div>
        </div>

            
    </div>
    
    </div>
</div>
<?php
Page::footerTemplate();
?>

