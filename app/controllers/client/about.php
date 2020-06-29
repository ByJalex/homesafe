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
        $instancia = new View();
        $instancia::render('aboutus');
    }

    function termsandconditions(){
        $instancia = new View();
        $instancia::render('termsandconditions');
    }

}
