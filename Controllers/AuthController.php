<?php
use Controllers\ControllerBase;
require_once "Controllers/ControllerBase.php";

class AuthController extends ControllerBase{
    public function __construct()
    {
        parent::__construct();
    }

    public function login(array $data){
        $this->view->name = "Login";
        if(!empty($data)){
            $this->view->data = $data;
        }
        $this->loadView($this::class, __FUNCTION__, false);
    }
}