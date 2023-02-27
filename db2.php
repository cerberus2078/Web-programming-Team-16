<?php
$servername = "db";
$username = "booking";
$password = "booking";
$dbname = "booking";

//creating connection
$conn =  new mysqli($servername,$username,$password,$dbname);

//check the connection

if ($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}


?>