<?php
require_once "Models/User.php";
require_once "Data/Connection.php";
class UserService{
    private $conn;
    private $connectionService;
    public function __construct(){
        $this->connectionService = new Connection();
    }

    public function LoginUser($email, $pwd){
        $conn = $this->connectionService->getConnection();
        $x = $conn->execute_query("SELECT * FROM users WHERE email='" . $email . "' && pwd='" . $pwd . "'");
        setcookie("id", $x->fetch_column(0));
        $this->connectionService->closeConnection($conn);
        return new User($x->fetch_column(0), $x->fetch_column(1), $x->fetch_column(2));
    }
}
?>