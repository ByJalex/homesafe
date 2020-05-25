<?php


class product
{

    function __construct()
    {
        #login::feed();
    }

    #El metodo que se inicializara sera el mismo del nobre de la clase
    function product()
    {
        #print 'hola';
        $instancia = new View();
        $instancia::render('product');
    }
    
    function singleproduct()
    {
        #print 'hola';
        $instancia = new View();
        $instancia::render('product');
    }

    function checkout()
    {
        #print 'hola';
        $instancia = new View();
        $instancia::render('checkout');
    }
}
