<?php

class search
{

    function __construct()
    {
       # home::feed();
    }

    function search()
    {
        $instancia = new View();
        $instancia::render('search');
    }
    
    function test()
    {
        $instancia = new View();
        $instancia::render('search');
    }

}
