<?php

class api
{
    function __construct()
    {
        api::startApi();
    }

    static function startApi()
    {
        if (empty($_GET['url'])) {
            $_GET['url'] = '';
        }
        $url = $_GET['url'];
        $url = rtrim($url . '/');
        $url = explode('/', $url);
        $archivoApi = 'app/api/' . $url[1] . '.php';
        if ($url[0] === 'api') {
            if (file_exists($archivoApi)) {
                require_once $archivoApi;
                $api = new $url[1];
                if (empty($url[2])) {
                    $api->{$url[1]}();
                } else {
                    if (method_exists($api, $url[2])) :
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
