<?php

/**
 * Valores URI
 */
define('URI', $_SERVER['REQUEST_URI']);
/**
 * Valores de RUTA
 */
define('PATH_CONTROLLERS', 'app/controllers/');
define('PATH_VIEWS', 'php-mvc-master/app/views/');
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
/**
 * Valores CORE
 */

#defined('BASEPATH') or exit('No se permite acceso directo');

define('DB_DRIVER', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_NAME', 'doclinic');
define('DB_PASS', '');