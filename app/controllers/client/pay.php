<?php

class pay
{

    function __construct()
    {
       # home::feed();
    }

    function pay()
    {
        $instancia = new View();
        $instancia::render('checkout');
    }
    
    function example()
    {
        $instancia = new View();
        $instancia::render('search');
    }

}
