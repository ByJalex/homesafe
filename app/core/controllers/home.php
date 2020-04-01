<?php

class home extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('home');
    }
}
