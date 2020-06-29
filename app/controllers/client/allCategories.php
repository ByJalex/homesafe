<?php

class allCategories
{

    function __construct()
    {
        
    }

    function allCategories()
    {
        $instancia = new View();
        $instancia::render('allCategories');
    }

}