<?php
require_once "Models/User.php";
require_once "Data/Connection.php";
class UserService{
    private $connectionService;
    public function __construct(){
        $this->connectionService = new Connection();
    }

    public function loginUser($email, $pwd) : User | null{
        $conn = $this->connectionService->getConnection();
        $x = $conn->execute_query("SELECT * FROM users WHERE email='" . $email . "' && pwd='" . $pwd . "'");
        $row = $x->fetch_row();
        
        if($row == null){
            return null;
        }

        $this->connectionService->closeConnection($conn);
        return new User($row[0], $row[1], $row[2]);
    }
}
?>