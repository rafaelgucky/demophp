<?php
$conn;
try{
    $server = "localhost";
    $user = "root";
    $pwd = "1234";
    $db = "php_demo";
    $port = "3306";
    
    $conn = new mysqli($server, $user, $pwd, $db, $port);
}
catch(Exception $e){
   echo "ERRO DE CONEXÃO COM O BANCO </br>";
   echo "ERROR: " . $e->getMessage();
   die();
}
?>