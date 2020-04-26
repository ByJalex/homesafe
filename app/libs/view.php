<?php

class View
{
    function __construct()
    {
        #echo '<p>Vista base <3</p>';
    }

    #Metodo para renderizar vista
    static function render(/*Nombre de la vista que se renderizara*/$nombre)
    {
        #Manda a requerir la vista para renderizarla, se toma en cuenta que nuestro enrutamiento corre desde
        #El index
        require_once 'app/view/client/' . $nombre . '.php';
    }
}
