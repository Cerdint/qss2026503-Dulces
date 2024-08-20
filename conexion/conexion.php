<?php
$servername = "localhost";
$username = "sergio";
$password = "sergioh543";
$dbname = "tienda";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_errno){
    die("Fail to connect:". $conn->connect_error);
}

return $conn;