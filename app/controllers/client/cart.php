<?php

class cart
{

    function __construct()
    {
       # home::feed();
    }

    function cart()
    {
        $instancia = new View();
        $instancia::render('cart');
    }
    
    function other_method()
    {
        $url = $_GET['url'];
        $url = rtrim($url . '/');
        $url = explode('/', $url);
        echo $url[2];
        $instancia = new View();
        $instancia::render('viewProduct');
    }

}
