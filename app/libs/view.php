<?php

class View
{
    function __construct()
    {
        #Vista base <3
    }

    function render($nombre){
        require RUTA_APP.'view/client/'.$nombre.'.php';
    }
}