<?php
class Controller
{
    public $view;

    function __construct()
    {
        Controller::getView();
    }

    private function getView()
    {
        $this->view = new View();
    }

    public function api($api)
    {
        try {
            //validar si el modelo solicitado existe
            if (file_exists(dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'api' . DIRECTORY_SEPARATOR . $api . '.php')) {
                //Si existe la incluimos
                require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'api' . DIRECTORY_SEPARATOR . $api . '.php';
                return new $api;
            } else {
                throw new Exception("El modelo " . $api . " no existe, por favor intente con uno existente");
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
