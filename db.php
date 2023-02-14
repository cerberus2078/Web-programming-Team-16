<?php
$servername = "db";
$username = "team16";
$password = "team16";
$dbname = "team16";

//creating connection
$conn =  new mysqli($servername,$username,$password,$dbname);

//check the connection

if ($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}

?>