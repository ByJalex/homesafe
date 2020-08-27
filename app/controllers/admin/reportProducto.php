<?php

class reportProducto
{

    function __construct()
    {
        
    }

    function reportProducto()
    {
        $instancia = new View();
        $instancia::renderAdmin('reportProducto');
    }

}