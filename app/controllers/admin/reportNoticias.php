<?php

class reportNoticias
{

    function __construct()
    {
        
    }

    function reportNoticias()
    {
        $instancia = new View();
        $instancia::renderAdmin('reportNoticias');
    }

}