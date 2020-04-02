<?php

class categories extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('categories');
    }
}