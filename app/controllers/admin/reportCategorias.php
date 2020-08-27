<?php

class reportCategorias
{

    function __construct()
    {
        
    }

    function reportCategorias()
    {
        $instancia = new View();
        $instancia::renderAdmin('reportCategorias');
    }

}