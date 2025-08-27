<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "rj_esport";

$conn = mysqli_connect($host, $user, $pass, $db);
if(!$conn){
    die("Database Connection Failed!");
}
?>