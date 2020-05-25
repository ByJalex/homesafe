<?php

class productos
{

    function __construct()
    {
        
    }

    function productos()
    {
        $instancia = new View();
        $instancia::renderAdmin('productos');
    }

}