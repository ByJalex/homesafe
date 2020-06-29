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
    
    function orders()
    {
        $instancia = new View();
        $instancia::render('orders');
    }

    function wishlist()
    {
        $instancia = new View();
        $instancia::render('wishlist');
    }

    function usersettings()
    {
        $instancia = new View();
        $instancia::render('usersettings');
    }

}
