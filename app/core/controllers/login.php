<?php

class login extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('login');
    }
}