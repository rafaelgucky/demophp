<?php
class User{
    public $id;
    public $email;
    public $pwd;
    public function __construct($id, $email, $pwd){
        $this->id = $id;
        $this->email = $email;
        $this->pwd = $pwd;
    }
}
?>