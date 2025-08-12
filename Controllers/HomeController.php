<?php
class HomeController{
    public function index(array $data){
        echo "<br>";
        foreach($data as $key => $value){
            echo "{$key} = {$value}<br>";
        }
    }
}

?>