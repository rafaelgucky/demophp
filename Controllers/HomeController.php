<?php

use Controllers\ControllerBase;
class HomeController extends ControllerBase{

    public function __construct()
    {
        parent::__construct();
    }
    public function index(array $data){
        $this->view->name = "Home";
        if(!empty($data)){
            $this->view->data = $data;
        }
        $this->loadView($this::class, __FUNCTION__);
    }
}