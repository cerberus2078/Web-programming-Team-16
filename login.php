<?php $title = "Fest Event User Login";
include "header.php"; 
?>

<?php
if (isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    include "db.php";
    $sql="select * from new_user where username='".$username."' AND password='".$password."' ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    if($conn->query($sql)=== TRUE){

         if($row['usertype']=='user'){
            header("Location:events.php");
        }elseif($row['usertype']=='admin'){
            header("Location:php/adminhome.php");
        }else{
            echo "Username or Password Incorrect";
        }
 
    }else{
        echo "Error:".$conn->error;
    }
}

?>




<style>
    .userbody{
        justify-content: center;
        align-items: center;
    }

    *{
        box-sizing:border-box ;
    }

    form{
        width: 500px ;
        height: 500px;
        margin-top: 50px;
        margin-bottom: 50px;
        margin-left: 500px;
        border:2px solid #ccc;
        padding: 30px;
        background: #fff;
        border-radius:15px;
    }

    h1{
        text-align: center;
        margin-bottom: 40px;
        color:#58426e;
    }

    input{
        display:block;
        border:2px solid #ccc;
        width:95%;
        padding:10px;
        margin:10px auto;
        border-radius:5px;
    }

    label{
        color:#888;
        font-size:18px;
        padding:10px;
    }

    button{
        float:right;
        background: #58426e;
        padding:10px 15px;
        color:#fff;
        border-radius:5px;
        margin-right:10px;
        border:none;
    }

    button:hover{
        opacity: 7;
    }

    .newbtn{
        float:right;
        background: #58426e;
        padding:10px 15px;
        color:#fff;
        border-radius:5px;
        margin-right:10px;
        border:none;  
        text-decoration: none;
    }

    .newbtn:hover{
        opacity: 7;
    }

    .error{
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
    }

</style>

</head>

<body class="userbody">
<div class=".section text-white">    
<form action="" method="POST">
    <h1>Login</h1>

    <label>User Name</label>
    <input type="text" name="username" placeholder="User Name" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password" required><br><br>

    
    <a href="newuser.php" class="newbtn">New User</a>
    <button type="submit" name="submit">Login</button>


</form>
</div>
</body>

<?php include "footer.php" ?>