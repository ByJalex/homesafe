<?php

/**
 * This file is part of Shop
 * @autor tu_nombre
 * package Lib
 */
class Core
{
    /**
     * @var string $controladorActual
     * Es el controlador por defecto de aplicación
     * @access protected
     */
    protected $controladorActual = "home";

    /**
     * @var string $metodoActual
     * Es el método por defecto de aplicación
     * @access protected
     */
    protected $metodoActual = "index";

    /**
     * @var array $parametros
     * Esta variable define los parametros
     * @access protected
     */
    protected $parametros = [];

    public function __construct()
    {
        $url = $this->getUrl();

        //Buscamos y validamos si el controlador que estan mandando a llamar existe
        if (file_exists(RUTA_APP."Controllers".DIRECTORY_SEPARATOR . ucwords($url[0]) . '.php')) {
            //Si el controlador existe lo seteamos como el actual
            $this->controladorActual = ucwords($url[0]);
            //Despues de usar la posición 0 que corresponde al controlador, la quitamos
            unset($url[0]);
        }
        //require_once '../Controllers/';
        //Validar para incluir el controlador solicitado
        if (file_exists('../app/Controllers/' . ucwords($this->controladorActual) . '.php')) {

            require_once '../app/Controllers/' . ucwords($this->controladorActual) . '.php';
            //Instancia del controlador
            $this->controladorActual = new $this->controladorActual;
        }

        //Validar si existe una petición a un método
        if (isset($url[1])) {
            //Si existe validamos que exista dentro del controlador
            if (method_exists($this->controladorActual, $url[1])) {
                //si existe el método en el controlador se define
                $this->metodoActual = $url[1];
                //Despues de usar la posición 1 que corresponde a método, la quitamos
                unset($url[1]);
            }
        }

        //Obtenemos parametros
        $this->parametros = $url ? array_values($url) : [];

        //CallBack con los parametros
        call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
    }

    /**
     * getUrl
     * Este método se encarga de procesar y retornar
     * un array con la url seteada
     * @access public
     * @return array
     */
    public function getUrl()
    {
        if (isset($_GET['url'])) :
            //limpiamos los espacios que estan a la derecha de la url
            #Se definio "url" en el .htaccess
            $url = rtrim($_GET['url'], '/');
            //Sanitizar url
            $url = filter_var($url, FILTER_SANITIZE_URL);
            /**
             * $url array
             * [0] = Controller
             * [1] = Método
             * [2] = Parametro
             */
            $url = explode('/', $url);
            
            return $url;
        endif;
    }
}