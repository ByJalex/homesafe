<?php

class about extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('aboutus');
    }
}
