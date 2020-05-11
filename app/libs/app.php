<?php

class App
{
    #Esta clase se encargara de centralizar todo el contenido
    function __construct()
    {
        App::foo();
        #Si la url esta vacia redireccionar a la pagina de inicio
        if (empty($_GET['url'])) {
            $_GET['url'] = 'home';
        }
        #La variable url la mandamos a travez del htacces y  la guardamos en una variable llamada: $url
        $url = $_GET['url'];

        #Caracteres no necesarios '/'
        $url = rtrim($url . '/');

        #Se utiliza para desfragmentar la url en un arreglo
        $url = explode('/', $url);

        #Se prepara la ruta para ir a buscar el controlador...
        $archivoController = 'app/controllers/' . $url[0] . '.php';

        #se valida si el controlador existe
        if (file_exists($archivoController)) {
            require_once $archivoController;
            #Se crea una instancia de la clase del controlador que se esta llamando
            $controller = new $url[0];
            #Se valida si existe el metodo

            #echo 'Mi controlador existe';

            if (empty($url[1])) {
                #echo 'El metodo ' . $url[1] . ' esta vacio';
                $controller->{$url[0]}();
            } else {
                #Se crea una instancia del controlador y el metodo que se llama a travez de la url

                if (method_exists($controller, $url[1])) :
                    #echo "<br>";
                    $controller->{$url[1]}();
                else :
                    require_once 'app/controllers/error.php';
                    new errorPage();
                endif;
            }
        } else {
            require_once 'app/controllers/error.php';
            new errorPage();
        }
    }

    static function foo()
    {
    }
}