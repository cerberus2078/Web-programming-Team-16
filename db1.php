<?php
// Sara's db table
$servername = "db";
$username = "";
$password = "";
$dbname = "festevent";

//creating connection
$conn =  new mysqli($servername,$username,$password,$dbname);

//check the connection

if ($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}


?>