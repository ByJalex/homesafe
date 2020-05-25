<?php

class login
{

    function __construct()
    {
        
    }

    function login()
    {
        $instancia = new View();
        $instancia::renderAdmin('login');
    }

}

// login::login();
