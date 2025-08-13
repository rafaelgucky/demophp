<?php
use Controllers\ControllerBase;
require_once "Controllers/ControllerBase.php";

class AuthController extends ControllerBase{
    public function login(array $data){
        if(!empty($data)){

        }
        $this->loadView($this::class, __FUNCTION__, $data);
    }
}
?>