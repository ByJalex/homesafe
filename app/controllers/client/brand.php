<?php

class brand
{

    function __construct()
    {
        
    }

    function brand()
    {
        $instancia = new View();
        $instancia::render('brand');
    }

}