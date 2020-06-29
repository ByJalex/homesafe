<?php

class account
{

    function __construct()
    {
       # home::feed();
    }

    function account()
    {
        $instancia = new View();
        $instancia::render('account');
    }
    
    function test()
    {
        $instancia = new View();
        $instancia::render('search');
    }

}
