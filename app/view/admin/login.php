<?php

if (!isset($_SESSION['newsession'])) {
} else {
    header('Location: '.RUTA_PADRE.'privatesite/home');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login administrador</title>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- Custom fonts for this template-->
  <link href="<?php echo RUTA_PADRE ?>public/css/admin/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo RUTA_PADRE ?>public/css/admin/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido administrador</h1>
                  </div>

                  <!-- ------------------------------------------------- -->
                  <div class="user" id="authadmin">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" placeholder="Ingrese su usuario" v-model="authData.user">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" placeholder="Contraseña" v-model="authData.password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label" for="customCheck">Recordar</label>
                      </div>
                    </div>
                    <button @click="login()" class="btn btn-primary btn-user btn-block">
                      Inciar sesión
                    </button>
                    <hr>
                  </div>
                  <!-- ------------------------------------------------- -->

                  <div class="text-center">
                    <a class="small" href="forgot-password.php">¿Has olvidado tu contraseña?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../app/core/vue/admin/auth.js?m=dev" type="text/javascript"></script>
</body>

</html>