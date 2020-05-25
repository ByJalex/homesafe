<?php


class help
{

    function __construct()
    {
        #login::feed();
    }

    #El metodo que se inicializara sera el mismo del nobre de la clase
    function api()
    {
        #print 'hola';
        $instancia = new View();
        $instancia::render('api/useApi');
    }

}
