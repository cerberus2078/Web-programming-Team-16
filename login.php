<?php 

if(isset($_POST['uname'])&& isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data= stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $uname= validate($_POST['uname']);
    $pass= validate($_POST['password']);

    if(empty($uname)){
        header("Location: user.php?error=User Name is Required");
        exit();
    }elseif(empty($pass)){
        header("Location: user.php?error=Password is Required");
        exit();
    }else{
        echo "Valid Input";
    }
}else{
    header("Location: user.php");
    exit();
}








?>