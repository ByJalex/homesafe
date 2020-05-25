<?php

class marcas
{

    function __construct()
    {
        
    }

    function marcas()
    {
        $instancia = new View();
        $instancia::renderAdmin('marcas');
    }

}