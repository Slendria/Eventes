<?php

session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "21si1";
try{
    $conn = new PDO('mysql:host='.$host.';dbname='.$db,$user, $pass);

}catch(PDOException $e){
    die(("Connection error: ". $e->getMessage()));
}