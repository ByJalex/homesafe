<?php

class reportCliente
{

    function __construct()
    {
        
    }

    function reportCliente()
    {
        $instancia = new View();
        $instancia::renderAdmin('reportCliente');
    }

}