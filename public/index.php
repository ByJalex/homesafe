<?php
/**
 * This file is part of Shop
 * @filename 
 */
//Acá se incluye el archivo de configuración
require_once '../app/Config/Config.php';
require_once '../app/Helpers/Helpers.php';


//Módo debug
if (DEBUG_MODE) : ini_set('display_errors', 1) . ini_set('display_startups_errors', 1) . error_reporting(E_ALL);
endif;

//Composer validator
if (file_exists('../app/vendor/autoload.php')) :
    //Si existe lo incluimos para usar librerias
    require '../app/vendor/autoload.php';
endif;

/**
 * Autoload
 * Para que esto funcione bien, debemos
 * seguir el estandar, todas las clases que esten
 * dentro de nuestra libreria deben tener el mismo
 * nombre del archivo y tanto la clase como el archivo
 * deben inciar con Mayuscula o todo en MAYUSCULAS
 */
spl_autoload_register(function ($nombreClase) {
    require_once '../app/Lib/' . $nombreClase . '.php';
});

//Instancia del Nucleo o Kernel de tu aplicación
$genesis = new Core;
