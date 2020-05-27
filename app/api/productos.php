<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
require_once 'bd.php';

class productos {
    
    function __construct()
    {
    }

    public function readAllproductos()
    {
        $con = bd::connection();
        $sql = $con->prepare('SELECT * FROM productos');
        $sql->execute();
        $getProducts = $sql->fetchAll(PDO::FETCH_ASSOC);
        $jsonProduct = json_encode(array('error' => false, 'popularProducts' => $getProducts));
        if($_GET['pretty']){
            echo product::prettyPrint( $jsonProduct );
        }else{
            echo json_encode(array('error' => false, 'popularProducts' => $getProducts));
        }
    }

    function prettyPrint($jsonProduct)
    {
        $result = '';
        $level = 0;
        $in_quotes = false;
        $in_escape = false;
        $ends_line_level = NULL;
        $json_length = strlen($jsonProduct);

        for ($i = 0; $i < $json_length; $i++) {
            $char = $jsonProduct[$i];
            $new_line_level = NULL;
            $post = "";
            if ($ends_line_level !== NULL) {
                $new_line_level = $ends_line_level;
                $ends_line_level = NULL;
            }
            if ($in_escape) {
                $in_escape = false;
            } else if ($char === '"') {
                $in_quotes = !$in_quotes;
            } else if (!$in_quotes) {
                switch ($char) {
                    case '}':
                    case ']':
                        $level--;
                        $ends_line_level = NULL;
                        $new_line_level = $level;
                        break;

                    case '{':
                    case '[':
                        $level++;
                    case ',':
                        $ends_line_level = $level;
                        break;

                    case ':':
                        $post = " ";
                        break;

                    case " ":
                    case "\t":
                    case "\n":
                    case "\r":
                        $char = "";
                        $ends_line_level = $new_line_level;
                        $new_line_level = NULL;
                        break;
                }
            } else if ($char === '\\') {
                $in_escape = true;
            }
            if ($new_line_level !== NULL) {
                $result .= "\n" . str_repeat("\t", $new_line_level);
            }
            $result .= $char . $post;
        }

        return $result;
    }
}

?>