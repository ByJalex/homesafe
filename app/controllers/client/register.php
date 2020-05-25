<?php

class register
{

    function __construct()
    {
       # home::feed();
    }

    function register()
    {
        $instancia = new View();
        #Aqui siempre vas a llamar el archivo el html
        $instancia::render('register');
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
