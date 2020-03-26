<?php

  // Eliminamos las sesiones
  session_start();
  session_destroy();

  header('location: ../../view/client/index.php');

?>