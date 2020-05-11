<?php
require_once 'app/config/Config.php';
require_once 'app/libs/app.php';
require_once 'app/libs/controller.php';
require_once 'app/libs/model.php';
require_once 'app/libs/view.php';
require_once 'app/libs/api.php';

//Módo debug (DEBUG_MODE = true si esta en produccion, FALSE: si esta en desarrollo)
if (DEBUG_MODE) {
    ini_set('display_errors', 0) . ini_set('display_startups_errors', 0) . error_reporting(E_ALL);
    define('RUTA_PADRE', 'https://homesafe-sv.herokuapp.com/');
} else {
    define('RUTA_PADRE', 'http://localhost/homesafe/');
}

//Se configura la ruta para la API
$url = $_GET['url'];
$url = rtrim($url . '/');
$url = explode('/', $url);

if ($url[0] == 'api') {
    new api();
} else {
    new app();
}
