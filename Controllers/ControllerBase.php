<?php
namespace Controllers;

use HelloWorld\Models\View;
require_once "Models/View.php";

class ControllerBase{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }


    public function loadView($class, $method, $loadLayout = true){
        $this->view->viewPath = str_replace("Controller","", $class) . "/" . $method . ".php";
        if($loadLayout){
            include "Views/Layout.php";
        }
        else{
            include "Views/Auth/Login.php";
        }
    }
}