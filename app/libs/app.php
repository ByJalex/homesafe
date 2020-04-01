<?php

class App
{
    var $url;
    function __construct()
    {
        App::getUrl();
        App::getTemplate();
    }

    private function getUrl()
    {
        $this->url = $_GET['url'];
        $this->url = rtrim($this->url, '/');
        $this->url = explode('/', $this->url);
    }

    private function getTemplate()
    {
        $archivoController = RUTA_APP.'core/controllers/' . $this->url[0] . '.php';
        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $this->url[0];
            if (isset($this->url[1])) {
                $controller->{$this->url[1]}();
            }
        } else {
            $bug = RUTA_APP.'core/controllers/bug.php';
            require_once $bug;
            $bug = new bug();
        }
    }
}
