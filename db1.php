<?php
// Sara's db table
$servername = "db";
$username = "festevent";
$password = "team16";
$dbname = "festevent";

$conn =  new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}


?>