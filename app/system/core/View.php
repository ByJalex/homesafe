<?php
class View
{
    protected $template;
    protected $controller_name;
    protected $params;
    public function __construct($controller_name = '', $params = array())
    {
        $this->controller_name = $controller_name;
        $this->params = $params;
        $this->render();
    }

    protected function render()
    {
        if (class_exists($this->controller_name)) {
            $file_name = str_replace('Controller', '', $this->controller_name);
            $this->template = $this->getContentTemplate($file_name);
            echo $this->template;
        } else {
            throw new Exception('Error no existe ' . $this->controller_name);
        }
    }

    protected function getContentTemplate($file_name)
    {
        #Aqui se va a guardar una vista con el mismo nombre de la carpeta Ej:
        #Carpeta: Home, Archivo php (Vista): Home.php
        $file_path = ROOT . '/' . PATH_VIEWS . '/' . $file_name . '.php';
        if (is_file($file_path)) {
            extract($this->params);
            ob_start();
            require($file_path);
            $template = ob_get_contents();
            ob_end_clean();
            return $template;
        } else {
            throw new Exception('Error no existe: ' . $file_path);
            #die('asd');
        }
    }
}
