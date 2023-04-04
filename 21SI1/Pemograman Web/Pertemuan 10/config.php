<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "21si1";

$conn = mysqli_connect($server, $user, $pass);
if(!$conn){
    die("Database tidak terkoneksi");
}

$conn->select_db($db);