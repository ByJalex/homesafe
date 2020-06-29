<?php

class categories
{

    function __construct()
    {
        
    }

    function categories()
    {
        $instancia = new View();
        $instancia::render('categories');
    }

}