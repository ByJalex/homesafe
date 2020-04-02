<?php

class product extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('product');
    }
}