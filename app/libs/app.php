<?php

class App
{
    //var $url;
    function __construct()
    {
        //App::getUrl();
        App::getTemplate();
    }

    protected $controladorActual = "home";

    private function getUrl()
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
            #print_r($url);
            return $url;
        endif;
    }

    #funcion para verificar si el controlador actual existe...
    private function getTemplate()
    {
        $url = $this->getUrl();

        #Si el controlador esta vacio redireccionar al home
        if (empty($url[0])) {
            $url[0] = 'home';
        }

        #Verificar si el controlador existe
        $archivoController = RUTA_APP . 'core/controllers/' . $url[0] . '.php';
        if (file_exists($archivoController)) {
            #Llamar el controlador para mostar la vista
            require_once $archivoController;
            $controller = new $url[0];
            if (isset($this->url[1])) {
                $controller->{$url[1]}();
            }
        } else {
            #print_r($archivoController);
            $bug = RUTA_APP . 'core/controllers/bug.php';
            require_once $bug;
            $bug = new bug();
        }
    }


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
