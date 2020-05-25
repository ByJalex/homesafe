<?php
class about
{

    function __construct()
    {
        #login::feed();
    }

    #El metodo que se inicializara sera el mismo del nobre de la clase
    function about()
    {
        #print 'hola';
        $instancia = new View();
        $instancia::render('api/useApi');
    }

    function termsandconditions(){
        $instancia = new View();
        $instancia::render('termsandconditions');
    }

}
