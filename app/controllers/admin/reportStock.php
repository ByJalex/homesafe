<?php

class reportStock
{

    function __construct()
    {
        
    }

    function reportStock()
    {
        $instancia = new View();
        $instancia::renderAdmin('reportStock');
    }

}