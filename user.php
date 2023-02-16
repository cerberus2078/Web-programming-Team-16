<?php include "header.php" ?>

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

</style>

</head>

<body class="userbody">
<div class=".section text-white">    
<form action="login.php" method="post">
    <h1>Login</h1>
    <label>User Name</label>
    <input type="text" name="uname" placeholder="User Name">

    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br><br>

    <button type="submit">Login</button>












</form>
</div>
</body>




<?php include "footer.php" ?>