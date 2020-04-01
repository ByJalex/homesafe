<?php

class View
{
    function __construct()
    {
        #echo '<p>Vista base</p>';
    }

    function render($nombre){
        require RUTA_APP.'view/client/'.$nombre.'.php';
    }
}