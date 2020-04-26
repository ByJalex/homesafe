<?php

class home
{

    function __construct()
    {
       # home::feed();
    }

    function home()
    {
        $instancia = new View();
        $instancia::render('home');
    }

    function individualProduct()
    {
        $url = $_GET['url'];
        $url = rtrim($url . '/');
        $url = explode('/', $url);
        echo $url[2];
        $instancia = new View();
        $instancia::render('viewProduct');
    }
}
