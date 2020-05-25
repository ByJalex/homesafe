<?php

class categorias
{

    function __construct()
    {
        
    }

    function categorias()
    {
        $instancia = new View();
        $instancia::renderAdmin('categorias');
    }

}