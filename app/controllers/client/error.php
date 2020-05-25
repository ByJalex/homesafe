<?php

class errorPage
{

    function __construct()
    {
        errorPage::error();
    }

    function error()
    {
        $instancia = new View();
        $instancia::render('404');
    }
}
