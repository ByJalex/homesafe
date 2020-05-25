<?php

class clientes
{

    function __construct()
    {
        
    }

    function clientes()
    {
        $instancia = new View();
        $instancia::renderAdmin('clientes');
    }

}