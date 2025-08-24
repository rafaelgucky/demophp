<?php
use Controllers\ControllerBase;
require_once "Controllers/ControllerBase.php";
require_once "Services/UserService.php";

class AuthController extends ControllerBase{

    private UserService $userService;
    public function __construct()
    {
        parent::__construct();
        $this->userService = new UserService();
    }

    public function login(){
        $this->view->name = "Login";
        $this->loadView($this::class, __FUNCTION__, false);
    }
    public function authenticateLogin(array $data){
        $this->view->name = "Login";
        $user = $this->userService->loginUser($data["email"] ?? "", $data["pwd"] ?? "");
        if($user){
            setcookie("id", $user->id);
            $this->view->data = $user;
            $this->loadView("HomeController", "index");
        }
    }
}