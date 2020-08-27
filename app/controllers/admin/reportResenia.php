<?php

class reportResenia
{

    function __construct()
    {
        
    }

    function reportResenia()
    {
        $instancia = new View();
        $instancia::renderAdmin('reportResenia');
    }

}