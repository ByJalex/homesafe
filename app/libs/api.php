<?php

class api
{
    function __construct()
    {
        api::startApi();
    }

    static function startApi()
    {
        #Se crea la validacion para ver si la url existe
        if (empty($_GET['url'])) {
            $_GET['url'] = '';
            #echo 'Amor la url esta vacia';
        }
        $url = $_GET['url'];
        $url = rtrim($url . '/');
        $url = explode('/', $url);
        $archivoApi = 'app/api/' . $url[1] . '.php';
        // echo '<pre>';
        // print_r($archivoApi);
        // echo '</pre>';
        if ($url[0] === 'api') {
            // echo $archivoApi;
            if (file_exists($archivoApi)) {
                require_once $archivoApi;
                #Se crea una instancia de la clase del controlador que se esta llamando
                $api = new $url[1];
                #Se valida si existe el metodo
                #echo 'Mi controlador existe';
                if (empty($url[2])) {
                    #echo 'El metodo ' . $url[1] . ' esta vacio';
                    $api->{$url[1]}();
                } else {
                    #Se crea una instancia del controlador y el metodo que se llama a travez de la url
                    if (method_exists($api, $url[2])) :
                        #echo "<br>";
                        $api->{$url[2]}();
                    else :
                        require_once 'app/controllers/error.php';
                    endif;
                }
            } else {
                echo 'Esta pagina no existe';
            }
        } else {
            echo 'La pagina que estas buscando no existe';
        }
    }
}
