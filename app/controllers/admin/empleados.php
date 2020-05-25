<?php

class empleados
{

    function __construct()
    {
        
    }

    function empleados()
    {
        $instancia = new View();
        $instancia::renderAdmin('empleados');
    }

}