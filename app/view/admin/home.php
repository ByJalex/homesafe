<?php

require_once(RUTA_APP . 'templates/templateAdmin.php');
Page::headerTemplate('Principal');

// header('Content-Type: text/html; charset=UTF-8');
//Iniciar una nueva sesión o reanudar la existente.
//Si existe la sesión "cliente"..., la guardamos en una variable.


?>

<div class="container-fluid" id="dashboard">

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
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{customers.count}}</div>
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
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{sales.count}}</div>
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
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{review.count}}</div>
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
      <div class="mb-1 small">Meta de ventas (40 al dia)</div>
      <div class="progress mb-4">
        <div class="progress-bar bg-danger" role="progressbar" v-bind:style="{ width: salePorcent + '%' }" aria-valuemax="400"><small>{{salePorcent}}%</small></div>
      </div>
    </div>
  </div>

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Graficos</h1>
    </div>
  
    <div class="row">
      <div class="col-12">
      <h1>Cantidad de productos en Stock</h1>
        <div id="adawdawdawdawdawsaw" style="width: auto;"></div>
      </div>
    </div>

  </div>

</div>

<script src="../app/core/vue/admin/dashboard.js"></script>

<?php
Page::footerTemplate();
?>