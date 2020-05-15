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

    static function function1()
    {
        print 'Funcion asd';
    }

    static function funcion2()
    {
        print 'Funcion lol';
    }

    public  function test()
    {
     #   $instancia = new Post;
      #  echo $instancia::Tester("test");
      echo 'Test()';
    }
}
