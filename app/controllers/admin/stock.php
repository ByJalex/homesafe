<?php

class stock
{

    function __construct()
    {
        
    }

    function stock()
    {
        $instancia = new View();
        $instancia::renderAdmin('stock');
    }

}