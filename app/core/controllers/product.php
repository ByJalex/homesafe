<?php

class product extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('product');
        #product::saludo();
    }

    function saludo()
    {
        print_r('Hola este es un saludo');
    }
}
