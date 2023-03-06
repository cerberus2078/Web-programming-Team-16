<?php $title = "Fest Event Contact";
 include "header.php"; ?>

<style>

    
    section{
        display:flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
       
    }
    section::before{
        content:'';
        position: absolute;
        top:0;
        left:0;
        width:50%;
        height: 100%;
       
    }

    .containercont{
        position: relative;
        min-width: 1100px;
        min-height: 550px;
        display: flex;
        z-index:1000;
       
    }

    .containercont .contactInfo{
        position: absolute;
        top: 50px;
        margin-left: 0px;
        width: 350px;
        height:460px;
        background-color:#8c70a9;
        z-index:1;
        padding: 40px;
        display:flex;
        justify-content: center;
        flex-direction: column ;
        justify-content: space-between;
        box-shadow: 0 20px 25px rgba(0,0,0,0.15);
    } 

    .containercont .contactInfo h2{
        color: #fff;
        font-size: 24px ;
        font-weight: 500;
    }
    .contactInfo ul.continfo li{
        list-style:none;
    }
    .continfo img{
        height:30px;
    }
    .conttext{
        color:#fff;
        margin-left:10px;
        font-weight: 300 ;
    }
   .sci{
    list-style:none;
    margin-right:15px ;
   }


    .containercont .contactForm{
        position: absolute;
        padding: 70px 50px;
        padding-left: 250px;
        margin-left: 150px;
        width:1000px;
        height: 100% ;
        background: #fff;
        box-shadow: 0 50px 50px rgba(0,0,0,0.25);
    }
    .containercont .contactForm h2{
        color: 0f3959;
        font-size: 24px;
        font-weight: 500;
    }
    .containercont .contactForm .formbox{
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding-top: 30px;
    }
    .containercont .contactForm .formbox .inputbox{
        position: relative;
        margin-bottom: 35px;
    }
    .containercont .contactForm .formbox .inputbox.w50{
        width:47%;
    }
    .containercont .contactForm .formbox .inputbox.w100{
        width: 100%;
    }
    .containercont .contactForm .formbox .inputbox input,
    .containercont .contactForm .formbox .inputbox textarea{
        width: 100%;
        resize:none;
        padding: 5px 0;
        font-size: 18px;
        font-weight: 300;
        color:#333;
        border:none;
        outline:none;
        border-bottom: 1px solid #777;
    }
     .formbox .inputbox textarea{
        height: 120px;
    }
     .formbox .inputbox span{
        position: absolute;
        left:0;
        padding: 5px 0;
        pointer-events:none;
        font-size:18px;
        font-weight: 300;
        transition: 0.3s;
    }
    

    .inputbox .inputtype:focus~span,
    .inputbox .inputype:valid~span,
    .inputbox .inputtype:focus~span,
    .inputbox .inputtype:valid~span{
        transform: translateY(-20px); 
        font-weight: 400;
        font-size:12px;
        Letter-spacing:1px;
        font-weight:500;
    }
     .formbox .inputbox input[type="submit"]{
        position: relative;
        cursor:pointer;
        background:#8c70a9;
        color:#fff;
        border:none;
        max-width:150px;
        padding:12px;
    }
    .formbox .inputbox input[type="submit"]:hover{
        background:#bfafcf;
    }

    

    @media(max-width:1200px){
        .containercont{
            width:90%;
            min-width:auto;
            margin:20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.2);
        }
        .contactInfo{
            top:0;
            height: 500px;
            position: relative;
            box-shadow: none;
        }
        .containercont .contactForm{
            position: relative;
            width: calc(100%-350px);
            padding-left: 250px;
            margin-left: 0;
            padding: 40px;
            height:550px;        }
    }
    @media(max-width:991px){
        section{
           background:#8c70a9;
        }
        section::before{
            display: none;
        }
        .containercont{
            display: flex;
            flex-direction: column-reverse;
        }
        .containercont .contactForm{
            width:100%;
            height:auto;
        }
        .containercont .contactInfo{
            width:100%;
            height:auto;
            flex-direction: row;
        }
        .containercont .contactInfo .sci{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @media(max-width:600px){
            .containercont .contactForm{
                padding: 25px;
            }
            .containercont .contactInfo{
                padding:25px;
                flex-direction: column;
                align-items: flex-start;
            }
            .containercont .contactInfo .sci{
                margin-top:40px;
            }
            .containercont .contactForm .formbox .inputbox.w50{
                width:100%;
            }
        }
    }

</style>


<!--Contact form starts-->

    <section>
        <div class="containercont">
            <div class="contactInfo">
                <div>
                    <h2>Contact Info</h2><br>
                <ul class="continfo">
                    <li>
                        <span><img src="images/location.png"></span>
                        <span class="conttext">Helsinki</span>
                    </li>
                    <br>
                    <li>
                        <span class="continfo"><img src="images/mail.png"></span>
                        <span class="conttext">festevent@gmail.com</span>
                    </li>
                    <br>
                    <li>
                        <span class="continfo"><img src="images/call.png"></span>
                        <span class="conttext">+358 415746780</span>
                    </li>

                </ul>
                </div>

                <div class="sci">
                <a href=""><img src="images/1.png"></a>&nbsp;&nbsp;
                <a href=""><img src="images/2.png"></a>&nbsp;&nbsp;
                <a href=""><img src="images/3.png"></a>&nbsp;&nbsp;
                <a href=""><img src="images/4.png"></a>&nbsp;&nbsp;
                <a href=""><img src="images/5.png"></a>
                </div>
                
            </div>
            <div class="contactForm">
                <h2>Send A Message</h2>
                <form class="formbox" method="POST" name="conform" onsubmit="return crud()">
                    <div class="inputbox w50">
                        <input class="inputtype" name="fname" type="text" required>
                        <span class="inputtype">First Name</span>
                    </div>
                    <div class="inputbox w50">
                        <input class="inputtype" name="lname" type="text" required>
                        <span class="inputtype">Last Name</span>
                    </div>
                    <div class="inputbox w50">
                        <input class="inputtype" name="email" type="email" required>
                        <span class="inputtype">E-mail Address</span>
                    </div>
                    <div class="inputbox w50">
                        <input class="inputtype" name="mobno" type="text" required>
                        <span class="inputtype">Mobile Number</span>
                    </div>
                    <div class="inputbox w100">
                        <textarea class="inputtype" name="message" required></textarea>
                        <span class="inputtype">Write Your Message...</span>
                    </div>
                    <div class="inputbox w100">
                    <input type="submit" onclick="submit()" name="submit" value="Send" >
                    
                    </div>
                </form>
            </div>
        </div>
    </section>


<!--Contact form ends-->

<?php
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $mobno=$_POST['mobno'];
        $message=$_POST['message'];
        include 'db.php';
        $sql="insert into contact(fname,lname,email,mobno,message)
               values('$fname','$lname','$email','$mobno','$message')";
               
        if($conn->query($sql)=== TRUE){  ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                             swal({
                                    title: "<?php echo"Your information is added Sucessfully" ?>",
                                    icon: "success",
                                    button: "OK",
                                });
                    </script>     
<?php   }
            else{
                echo "Error:".$conn->error;
            }
    
        
    }
?>


<?php include "footer.php" ?>