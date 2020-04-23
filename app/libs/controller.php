<?php
class Controller
{
    public $view;

    function __construct()
    {
        Controller::getView();
    }

    private function getView()
    {
        $this->view = new View();
    }
}
