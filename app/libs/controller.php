<?php

/**Esta es la clase padre para cada controllador, y renderizar la respectiva vista. */

class Controller
{
    protected $view;

    function __construct()
    {
        $this->view = new View();
    }
}
