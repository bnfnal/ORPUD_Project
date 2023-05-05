<?php

$servername = "localhost";
$username = "root";
$pass = "root";
$dbname = "ORPUD_Project";

$conn = mysqli_connect($servername, $username, $pass, $dbname);

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}
else{
    "Успех";
}

?>