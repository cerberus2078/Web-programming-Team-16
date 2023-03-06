<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    include 'db.php';
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

<body >
<center>
   
<form action="" method="post">
    <h1>Login</h1>

    <label>User Name</label>
    <input type="text" name="username"  required>
    <br><br>
    <label>Password</label>
    <input type="password" name="password"  required><br><br>
    <br><br>
    
  
    <button type="submit">Login</button>


</form>
</center>
</body>