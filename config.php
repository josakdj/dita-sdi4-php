<?php

$host = "localhost";
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$host;" , $user , $pass);
    $mysql = "create database testdbe";
    $conn -> exec($mysql);
    echo "Database ready";
    echo "connected";
}catch(Execption $e){
    echo "not connected";
}



?>