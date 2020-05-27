<?php

/**Esta clase se encarga de gestionar las peticiones que se hacen a travez de la URI
 * asi mismo se encarga de renderizar la respectiva vista, de acuerdo al controlador.
 */

class App
{
    #Esta clase se encargara de centralizar todo el contenido
    function __construct()
    {
    }

    function client()
    {
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
        $archivoController = 'app/controllers/client/' . $url[0] . '.php';

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
                    #Si no existe un controlador se renderiza la vista 404
                    require_once 'app/controllers/client/error.php';
                    new errorPage();
                endif;
            }
        } else {
            #Si no existe un controlador se renderiza la vista 404
            require_once 'app/controllers/client/error.php';
            new errorPage();
        }
    }

    function admin()
    {
        $url = $_GET['url'];
        $url = rtrim($url . '/');
        $url = explode('/', $url);
        if (empty($url[1])) {
            $url[1] = 'login';
        }
        $archivoController = 'app/controllers/admin/' . $url[1] . '.php';
        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $url[1];
            if (empty($url[2])) {
                $controller->{$url[1]}();
            } else {
                if (method_exists($controller, $url[2])) :
                    $controller->{$url[2]}();
                else :
                    // require_once RUTA_PADRE . 'app/controllers/error.php';
                    // new errorPage();
                endif;
            }
        } else {
            // require_once RUTA_PADRE . 'app/controllers/error.php';
            // new errorPage();
        }
    }
}
