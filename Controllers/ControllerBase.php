<?php
namespace Controllers;

class ControllerBase{
    public function loadView($class, $method, $data){
        $view = str_replace("Controller","", $class) . "/" . $method . ".php";
        include "Views/" . $view;
    }
}

?>