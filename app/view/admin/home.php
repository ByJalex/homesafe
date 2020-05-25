<?php
require_once(RUTA_APP . 'templates/templateAdmin.php');
Page::headerTemplate('Principal');
?>

<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tablero</h1>
          </div>

          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">10,506</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Ventas(Ahora)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">24,065</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Ultimas reseñas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
    </div>
        <div class="card mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">LOGROS</h6>
                </div>
                <div class="card-body">
                  <div class="mb-1 small">Minimo de ventas</div>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
        </div>
    </div>
    <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Productos agotados</h1>
          </div>

          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div><img src="../../../public/images/noticias/Gear-Nest-Mini-Family-Shot-SOURCE-Google.jpg" alt="google" width="200px" class="img-fluid"></div>
                    <br>
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1 text-center">Google Nest mini</div>
                    <div class="h5 mb-0 font-weight text-gray-800 text-center">Con conectividad Wi-Fi integrada, reconocimiento de voz y soporte de automatización del hogar, la segunda generación de Google Nest Mini</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div><img src="../../../public/images/noticias/Gear-Nest-Mini-Family-Shot-SOURCE-Google.jpg" alt="google" width="200px" class="img-fluid"></div>
                    <br>
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1 text-center">Google Nest mini</div>
                    <div class="h5 mb-0 font-weight text-gray-800 text-center">Con conectividad Wi-Fi integrada, reconocimiento de voz y soporte de automatización del hogar, la segunda generación de Google Nest Mini</div>   
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div><img src="../../../public/images/noticias/Gear-Nest-Mini-Family-Shot-SOURCE-Google.jpg" alt="google" width="200px" class="img-fluid"></div>
                    <br>
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1 text-center">Google Nest mini</div>
                    <div class="h5 mb-0 font-weight text-gray-800 text-center">Con conectividad Wi-Fi integrada, reconocimiento de voz y soporte de automatización del hogar, la segunda generación de Google Nest Mini</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div><img src="../../../public/images/noticias/Gear-Nest-Mini-Family-Shot-SOURCE-Google.jpg" alt="google" width="200px" class="img-fluid"></div>
                    <br>
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1 text-center">Google Nest mini</div>
                    <div class="h5 mb-0 font-weight text-gray-800 text-center">Con conectividad Wi-Fi integrada, reconocimiento de voz y soporte de automatización del hogar, la segunda generación de Google Nest Mini</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
</div>

<?php
Page::footerTemplate();
?>