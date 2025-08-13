<?php

use Controllers\ControllerBase;
class HomeController extends ControllerBase{
    public function index(array $data){
        $this->LoadView($this::class, __FUNCTION__, $data);
    }
}

?>