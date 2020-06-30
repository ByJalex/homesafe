<?php

//Nombre de aplicación
define('APP_NAME', 'Home Safe');
//Versión de aplicación
define('APP_VERSION', '1');
//Rutas de apliación
define('RUTA_APP', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
// define('RUTA_PADRE', 'https://homesafe-sv.herokuapp.com/');
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/homesafe');
#Dev: http://localhost/homesafe/
define('RUTA_URL', 'https://homesafe-sv.herokuapp.com/');
//Zona horaria
define('TIME_ZONE', 'America/El_Salvador');
define('DEBUG_MODE', true); //True para desarrollo y false para producción
//Modo de errores/ Debug Mode
//Configuración del contenedor
define('PATCH_OS', explode(DIRECTORY_SEPARATOR, RUTA_APP));

// define('DB_CONFIG', parse_ini_file(PATCH_OS[0] . DIRECTORY_SEPARATOR . "db" . DIRECTORY_SEPARATOR . "db.ini", true));
// //Configuración de acceso a la base de datos
// define('DB_HOST', DB_CONFIG['detalles']['db_host']); //Tambien puede usar: 127.0.0.1
// //Usuario de base de datos
// define('DB_USER', DB_CONFIG['detalles']['db_user']);
// //Contraseña de base de datos
// define('DB_PASS', DB_CONFIG['detalles']['db_pass']);
// //Nombre de base de datos
// define('DB_NAME', DB_CONFIG['detalles']['db_name']); //fr
// //Driver o motor de base de datos
// define('DB_DRIVER', DB_CONFIG['detalles']['db_driver']); //Dependiendo de su gestor de base de datos use:

define('URI', $_SERVER['REQUEST_URI']);
define('PATH_CONTROLLERS', 'app/core/controllers/');
define('PATH_VIEWS', 'app/view/client');
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('CORE', 'system/core/');
