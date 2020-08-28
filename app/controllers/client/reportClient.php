<?php
class reportClient
{

    function __construct()
    {
        #login::feed();
    }

    #El metodo que se inicializara sera el mismo del nobre de la clase
    function reportClient()
    {
        $instancia = new View();
        $instancia::render('aboutus');
    }

    function generate_report(){
        #echo $_GET['param'];
        $instancia = new View();
        $instancia::render('reportClient');
    }

}
