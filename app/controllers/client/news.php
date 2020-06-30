<?php

class news
{

    function __construct()
    {
        
    }

    function news()
    {
        $instancia = new View();
        $instancia::render('news');
    }

}