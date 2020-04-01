<?php

class Controller
{
    public $view;

    function __construct()
    {
        #echo '<p>Controlador Padre</p>';
        Controller::getView();
    }

    private function getView()
    {
        $this->view = new View();
    }
}
