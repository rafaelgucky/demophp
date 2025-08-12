<?php
require_once "Controllers/HomeController.php";

class Mapper{
    public function Redirect(string $uri, string $queryStrings){
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
        $controller->$stringMetodo($this->getParameters(urldecode($queryStrings)));
    }

    private function getParameters(string $queryStrings): array{
        if(empty($queryStrings)) return [];
        $key = "";
        $value = "";
        $temp = "";
        $result = [];

        for($i = 0; $i < strlen($queryStrings); $i++){
            if($queryStrings[$i] == "="){
                $key = $temp;
                $temp = "";
                continue;
            }

            if($queryStrings[$i] == "&"){
                $value = $temp;
                $temp = "";
                $result[$key] = $value;
                continue;
            }
            $temp .= $queryStrings[$i];
        }
        $result[$key] = $temp;
        return $result;
    }
}
?>