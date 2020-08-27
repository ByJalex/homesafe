<?php

class reportMarca
{

    function __construct()
    {
        
    }

    function reportMarca()
    {
        $instancia = new View();
        $instancia::renderAdmin('reportMarca');
    }

}