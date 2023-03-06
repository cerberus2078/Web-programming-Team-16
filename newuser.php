<?php
$title = "New user login";
include 'header.php';
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
        height: 1000px;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 500px;
        border:2px solid #ccc;
        padding: 30px;
        background: #fff;
        border-radius:15px;
    }

    h1{
        text-align: center;
        margin-bottom: 40px;
        color:rgb(36, 0, 52);
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
        padding-top: 5px;
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

<div class="text">
<form method="post" action="" onsubmit="return crud()" name="yes">
    <h1>New User</h1>

    <label>First Name</label>
    <input type="text" name="fname" placeholder="First Name" required onblur="fname()"><br><br>
    <label>Last Name</label>
    <input type="text" name="lname" placeholder="Last Name" required><br><br>
    <label>Username</label>
    <input type="text" name="username" placeholder="Username" required><br><br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Password" required onblur="password()"><br><br>
    <input type="text" name="email" placeholder="E-mail" required ><br><br>
    

    <input type="submit" value="Register"></input>

</form>
</div>

<?php
if (isset($_POST['Submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    include 'db1.php';
    $sql = "insert into new_user (fname, lname, username, email)
    values('$fname', '$lname', '$username', '$email')";

    if($conn->query($sql) === TRUE){
        echo "Your account has been successfully created created.";
    }
    else{
        echo "Error:" . $conn->error;
    }
}

?>

<?php
include 'footer.php';
?>