<?php

class cart extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('cart');
    }
}