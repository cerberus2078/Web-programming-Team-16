<?php $title = "Fest Event User Login";
include "header.php"; 

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

        header ("location:events.php");

    }elseif($row["usertype"]=="admin"){

        header ("location:adminhome.php");

    }else{

        echo "username or password incorrect";

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
        color:#600080;
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
        background: #555;
        padding:10px 15px;
        color:#fff;
        border-radius:5px;
        margin-right:10px;
        border:none;
    }

    button:hover{
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
<form action="#" method="post">
    <h1>Login</h1>


    <label>User Name</label>
    <input type="text" name="uname" placeholder="User Name" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password" required><br><br>

    
    <button type="submit">New User</button> 
    <button type="submit">Login</button>


</form>
</div>
</body>




<?php include "footer.php" ?>