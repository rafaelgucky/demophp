<?php
class Connection{
    public $server = "localhost";
    public $user = "root";
    public $pwd = "1234";
    public $db = "php_demo";
    public $port = "3306";
    
    public function getConnection(){
        try{
            return new mysqli($this->server, $this->user, $this->pwd, $this->db, $this->port);
        }
        catch(Exception $e){
            return;
        }
    }

    public function closeConnection(mysqli $conn){
        try{
            $conn->close();
        }
        catch(Exception $e){
            return;
        }
    }
}
?>