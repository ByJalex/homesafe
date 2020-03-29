<?php

class Home extends Controller
{
 
    public function __construct()
    {
       
    }

    public function index()
    {
        //L variable datos es la que usamos para pasar
        //datos del controlador a la vista
        $datos = [
            'titulo' => 'Home',
            'productos'=> array(),
        ];
        //Definimos la vista de nuestro método
    return $this->vista('client/index', $datos);
    
    }

    //*espere le paso la api Genial@

    /**
     * filesHome
     * Este método se encarga de gestionar los recursos
     * mediante el administrador de archivos
     * @access public
     */
    public function files()
    {
       
        if (isset($_GET['img']) || isset($_GET['js']) || isset($_GET['css']) || isset($_GET['pdf'])) {
           
            if (isset($_GET['js'])) {
                return $this->filesManager($_GET['js'], false, 'js', true);
            }

        } 
    }

}
