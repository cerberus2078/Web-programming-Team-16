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
    

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql="select * from login where username='".$username."' AND password='".$password."' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user"){
       
       header("Location:events.php");

    }elseif($row["usertype"]=="admin"){
        
       header("Location:adminhome.php");

    }else{

        echo "username or password incorrect";
        
    }
}
?>



<html>
<head>
    <title>Login</title>

</head>

<body>
    <center>
    <h1>Login Form</h1>

    <br><br><br>
    <form action="#" method="POST">
    <div>
        <label>username</label>
        <input type="text" name="username" required>
    </div>
    <br><br>
    <div>
        <label>password</label>
        <input type="password" name="password" required>
    </div>
    <br><br>
    <div>
        <input type="submit" value="Login">
    </div>
    </form>

    </center>
</body>

</html>



