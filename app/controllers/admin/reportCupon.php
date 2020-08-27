<?php

class reportCupon
{

    function __construct()
    {
        
    }

    function reportCupon()
    {
        $instancia = new View();
        $instancia::renderAdmin('reportCupon');
    }

}