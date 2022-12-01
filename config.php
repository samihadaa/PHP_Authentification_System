<?php
$host = "localhost";
$dbname = "auth-sys";
$user = "root";
$pass = "";
$conn = new PDO("mysql:host=$host;dbname=$dbname;",$user,$pass);
if($conn == true){
    //echo "The connection has succeded";
}else {
    echo "Connection failed";
}

?>