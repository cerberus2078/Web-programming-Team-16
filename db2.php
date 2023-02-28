<?php
$servername = "db";
$username = "booking1";
$password = "booking";
$dbname = "booking1";

//creating connection
$conn =  new mysqli($servername,$username,$password,$dbname);

//check the connection

if ($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}


?>