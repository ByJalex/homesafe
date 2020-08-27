<?php

class reportEmpleado
{

    function __construct()
    {
        
    }

    function reportEmpleado()
    {
        $instancia = new View();
        $instancia::renderAdmin('reportEmpleado');
    }

}