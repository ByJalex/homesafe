<?php

class noticias
{

    function __construct()
    {
        
    }

    function noticias()
    {
        $instancia = new View();
        $instancia::renderAdmin('noticias');
    }

}