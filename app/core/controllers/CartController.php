<?php
#require_once ROOT . '/php-mvc-master/app/models/Home/HomeModel.php';
class CartController extends Controller
{
    private $model;
    public function __construct()
    {
        
    }

    public function show($param)
    {
        $params = array('parametro'=> $param);
        $this->render(__CLASS__, $params);
    }

    public function exec($param)
    {
        $this->show($param);
    }

    public function shop($param)
    {
        $this->show($param);
    }
    
}