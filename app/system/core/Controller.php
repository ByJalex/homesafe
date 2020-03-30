<?php

abstract class Controller
{
    private $view;

    public function __construct()
    {
    }

    protected function render($controler_name = '', $params = array())
    {
        $this->view = new View($controler_name, $params);
    }
    public function page404($object)
    {
        if ($object == false || $object == null) {
            //Muestra vista 404
            die("404");
        }
    }

    /**
     * modelo
     * Este método se encarga de instanciar y servir los
     * modelos de la aplicación
     * @access public
     * @param string $model
     * Define el nombre del objeto de modelo a usar
     */
    public function modelo($modelo)
    {
        
        try {
            //validar si el modelo solicitado existe
            if (file_exists(dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'Models'.DIRECTORY_SEPARATOR.$modelo.'.php')) {
                //Si existe la incluimos
                require_once dirname(dirname(__DIR__)).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'Models'.DIRECTORY_SEPARATOR.$modelo.'.php';
                return new $modelo;
            } else {
                throw new Exception("El modelo " . $modelo . " no existe, por favor intente con uno existente");
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    #Meotodo a ejecutar por default
    abstract public function exec($param);
}
