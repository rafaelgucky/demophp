<?php
require_once "Controllers/AuthController.php";
require_once "Controllers/HomeController.php";

class Mapper{
    public function Redirect(string $uri, array $data){
        $uri = str_replace("/index.php/","", $uri);
        $uri = str_replace("/index.php","", $uri);

        if(empty($uri)){
            $uri = "home";
        }
        
        $array = explode("/", $uri);

        $stringController = ucfirst($array[0]);
        $stringMetodo = "Index";

        if(sizeof($array) > 1){
            $stringMetodo = ucfirst($array[1]);
        }

        $classe = "{$stringController}Controller";

        $controller  = new $classe();
        $controller->$stringMetodo($data);
    }

    public function getView(string $uri){
        $uri = str_replace("/index.php/","", $uri);
        $uri = str_replace("/index.php","", $uri);
        return $uri;
    }
}
?>