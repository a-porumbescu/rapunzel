<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rapunzel";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connectoin failed " . mysqli_connect_error());
}
//echo "Connected successfully";