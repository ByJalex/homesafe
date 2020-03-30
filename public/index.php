<?php

require_once '../app/config/Config.php';
require_once '../app/system/core/autoload.php';
require_once '../app/system/core/Router.php';
require_once '../app/system/core/Controller.php';
require_once '../app/system/core/View.php';
$router = new Router();

$controlador = $router->getController();
$metod = $router->getMethod();
$param = $router->getParam();

require_once '../'.PATH_CONTROLLERS . $controlador . 'Controller.php';
$controlador.='Controller';
$controller = new $controlador();
$controller->$metod($param);