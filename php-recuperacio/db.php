<?php

$serverName = "db";               
$username   = "recupera";    
$password   = "recupera123";  
$dbName     = "recuperacio_php";         


$conn=new mysqli($serverName,$username,$password,$dbName);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}