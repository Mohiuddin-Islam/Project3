<?php 

$host = 'localhost:3306';
$user = 'root';
$pass = '';
$db = 'agriculture';

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo "connection failed".$conn->connect_error;
    exit();
}


?>
