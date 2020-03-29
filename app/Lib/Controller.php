<?php

class Controller extends Core
{
    public function __construct()
    {
    }

    /**
     * vista
     * Este método se encarga de renderizar las vistas
     * de la aplicaión
     * @access public
     * @param string $vista
     * Define el nombre de la vista a usar.
     * @param array $datos
     * Array con los valores que seran pasados a la vista
     */
    public function vista(string $vista, array $datos = [])
    {
        //validar si la vista solicitada existe
        if (file_exists('../app/view/' . $vista . '.php')) {

            //Si existe la incluimos
            require_once '../app/view/' . $vista . '.php';
        } else {
            $datos = [
                'titulo'    => 'Upps!',
                'mensaje'   => 'La vista ' . $vista . ' no existe, por indique una vista existente',
                'problema'  => 'Su solicitud'
            ];
            ob_start('comprimir_pagina');
            require_once '../app/view/bug.php';
            ob_end_flush();
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
            if (file_exists('../app/Models/' . $modelo . '.php')) {

                //Si existe la incluimos
                require_once '../app/Models/' . $modelo . '.php';
                return new $modelo;
            } else {
                throw new Exception("El modelo ".$modelo." no existe, por favor intente con uno existente");
            }
        } catch (Exception $e) {
            $datos = [
                'titulo'    => 'Upps!',
                'mensaje'   => 'Ha ocurrido un error con la instancia del modelo',
                'problema'  => $e->getMessage()
            ];
            ob_start('comprimir_pagina');
            require_once '../app/view/bug.php';
            ob_end_flush();
        }
    }


    /**
     * filesManager
     * Este métdo se encarga de gestionar todos
     * los ficheros y demas archivos de la aplicación
     * @access public 
     * @param string $ruta
     * Define la ruta del recursos solicitado
     * @param string $nombre
     * Define el nombre del recurso
     * @param string $type
     * Define el tipo de archivo o recurso
     * @param string $assets
     * Recurso origigen
     */
    public function filesManager($ruta, $nombre = false, $type, $assets = false)
    {
        switch ($type) {
            case 'img':
                # code...
                break;
            case 'js':
                if ($assets != false) {
                    header('Content-Type: application/javascript');
                    readfile(RUTA_APP . $ruta);
                } else {
                }
                break;
            case 'css':
                # code...
                break;
            case 'json':
                # code...
                break;
        }
    }
}
#Es que aun estoy en dev
