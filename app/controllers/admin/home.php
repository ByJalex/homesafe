<?php

class home
{

    function __construct()
    {
        
    }

    function home()
    {
        $instancia = new View();
        $instancia::renderAdmin('home');
    }

}