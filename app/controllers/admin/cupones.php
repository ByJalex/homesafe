<?php

class cupones
{

    function __construct()
    {
        
    }

    function cupones()
    {
        $instancia = new View();
        $instancia::renderAdmin('cupones');
    }

}