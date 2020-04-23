<?php

class categorieslist extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('categorieslist');
    }
}
