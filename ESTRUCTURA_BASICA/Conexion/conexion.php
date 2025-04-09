<?php
$servername="mysql:dbname=webiii;host:127.0.0.1";
$username = "root";
$password = "";

try{
    $conn =  new PDO($servername, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}