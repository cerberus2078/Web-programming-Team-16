<?php

$servername = "db";
$username = "festevent";
$password = "password";
$dbname = "festevent";

$conn =  new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}


?>



