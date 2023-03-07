<?php include "header.php";
?>



<style>
    .contain {
        text-align: center;
        width: 500px;
    }

    .userbooking {
        justify-content: center;
        align-items: center;
    }

    .block-white {
        color: rgb(255, 255, 255);
    }

    h1 {
        text-align: center;
        margin-bottom: 40px;
        color: rgb(255, 255, 255);
    }

    h6 {
        text-align: center;
        margin-bottom: 40px;
        color: rgb(255, 255, 255);
    }

    .submit {
        padding: 10px 30px;
        border-radius: 20px;
        font-size: 20px;
        background: #fff;
        border: 0;
        outline: none;
        cursor: pointer;


    }

    .popup {
        width: 400px;
        background: #fff;
        border-radius: 6px;
        position: absolute;
        top: 0%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.1);
        text-align: center;
        padding: 0 30px 30px;
        color: #333;
        transition: transform 0.4s, top 0.4s;

    }

    .open-popup {
        visibility: visible;
        top: 50%;
        transform: translate(-50%, -50%) scale(1);
        z-index: 2;
        border: 1px solid #8b8080;
    }

    .popup h1 {
        font-size: 38px;
        font-weight: 500;
        margin: 30px;
        color: unset;
    }

    .popup button {
        width: 100%;
        margin-top: 50px;
        padding: 10px 0;
        background: #6fd649;
        background: #fff;
        border: 0;
        outline: none;
        font-size: 18px;
        border-radius: 4px;
        curson: pointer;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    }

    /* Form Modal CSS starts */

    section {
        display: flex;
        justify-content: center;
        align-items: center;
        /* min-height: 100vh; */
        margin: 3%;
    }

    section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;

    }

    .containercont {
        position: relative;
        min-width: 1100px;
        min-height: 550px;
        display: flex;
        z-index: 1;

    }

    .containercont .contactInfo {
        position: absolute;
        top: 50px;
        margin-left: 0px;
        width: 350px;
        height: 460px;
        background-color: #8c70a9;
        z-index: 1;
        padding: 40px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15);
    }

    .containercont .contactInfo h2 {
        color: #fff;
        font-size: 24px;
        font-weight: 500;
    }

    .contactInfo ul.continfo li {
        list-style: none;
    }

    .continfo img {
        height: 30px;
    }

    .conttext {
        color: #fff;
        margin-left: 10px;
        font-weight: 300;
    }

    .sci {
        list-style: none;
        margin-right: 15px;
    }


    .containercont .contactForm {
        position: absolute;
        padding: 70px 50px;
        /* padding-left: 250px; */
        /* margin-left: 150px; */
        width: 1000px;
        height: 100%;
        background: #fff;
        box-shadow: 0 50px 50px rgba(0, 0, 0, 0.25);
    }

    .containercont .contactForm h2 {
        color: 0f3959;
        font-size: 24px;
        font-weight: 500;
    }

    .containercont .contactForm .formbox {
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding-top: 30px;
    }

    .containercont .contactForm .formbox .inputbox {
        position: relative;
        margin-bottom: 35px;
    }

    .containercont .contactForm .formbox .inputbox.w50 {
        width: 47%;
    }

    .containercont .contactForm .formbox .inputbox.w100 {
        width: 100%;
    }

    .containercont .contactForm .formbox .inputbox input,
    .containercont .contactForm .formbox .inputbox select,
    .containercont .contactForm .formbox .inputbox textarea {
        width: 100%;
        resize: none;
        padding: 5px 0;
        font-size: 18px;
        font-weight: 500;
        color: #333;
        border: none;
        outline: none;
        border-bottom: 1px solid #777;
        border-radius: 5px;
    }

    .formbox .inputbox textarea {
        height: 120px;
    }

    .formbox .inputbox span {
        position: absolute;
        left: 0;
        padding: 5px 0;
        pointer-events: none;
        font-size: 18px;
        font-weight: 300;
        transition: 0.3s;
    }


    .inputbox .inputtype:focus~span,
    .inputbox .inputype:valid~span,
    .inputbox .inputtype:focus~span,
    .inputbox .inputtype:valid~span {
        transform: translateY(-20px);
        font-weight: 400;
        font-size: 12px;
        Letter-spacing: 1px;
        font-weight: 500;
    }

    .formbox .inputbox input[type="submit"] {
        position: relative;
        cursor: pointer;
        background: #8c70a9;
        color: #fff !important;
        border: none !important;
        max-width: 150px;
        padding: 12px !important;
    }

    .formbox .inputbox input[type="submit"]:hover {
        background: #bfafcf;
    }

    @media(max-width:1200px) {
        .containercont {
            width: 90%;
            min-width: auto;
            margin: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .contactInfo {
            top: 0;
            height: 500px;
            position: relative;
            box-shadow: none;
        }

        .containercont .contactForm {
            position: relative;
            width: calc(100%-350px);
            padding-left: 250px;
            margin-left: 0;
            padding: 40px;
            height: 550px;
        }
    }

    @media(max-width:991px) {
        section {
            background: #8c70a9;
        }

        section::before {
            display: none;
        }

        .containercont {
            display: flex;
            /* flex-direction: column-reverse; */
        }

        .containercont .contactForm {
            width: 100%;
            height: auto;
        }

        .containercont .contactInfo {
            width: 100%;
            height: auto;
            flex-direction: row;
        }

        .containercont .contactInfo .sci {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media(max-width:600px) {
            .containercont .contactForm {
                padding: 25px;
            }

            .containercont .contactInfo {
                padding: 25px;
                flex-direction: column;
                align-items: flex-start;
            }

            .containercont .contactInfo .sci {
                margin-top: 40px;
            }

            .containercont .contactForm .formbox .inputbox.w50 {
                width: 100%;
            }
        }
    }
    /* Form Modal CSS ends */
</style>

<section>
    <div class="containercont">
        <div class="contactForm">
            <h2>Fill Your Information</h2>
            <form class="formbox" method="post" action="">
                <div class="inputbox w50">
                    <select name="events" class="events">
                        <option value="Festival"> Festival Events </option>
                        <option value="Concert"> Concert Events </option>
                        <option value="Musical"> Musical Events </option>
                    </select>
                </div>
                <div class="inputbox w50">
                    <input type="text" name="fname" required placeholder="First Name" class="form-control" onblur="requiredValidate(event);" required>
                </div>
                <div class="inputbox w50">
                    <input type="text" name="lname" required placeholder="Last Name" class="form-control" onblur="requiredValidate(event);" required>
                </div>
                <div class="inputbox w50">
                    <input type="email" name="email" required placeholder="Email_id" class="form-control" onblur="requiredValidate(event);" required>
                </div>
                <div class="inputbox w50">
                    <input type="date" name="date" class="form-control" placeholder="Book date" onblur="requiredValidate(event)">
                </div>
                <div class="inputbox w100">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</section>

<div class="contain">
    <div class="popup" id="popup">
        <img src="images/icons-done.gif" title="done" />
        <h1>Thank You!</h1>
        <p>Your details has been submitted sucessfully.</p>
        <button type="button" onclick="closePopup();">OK</button>
    </div>
    <div class="popup" id="popup-error">
        <img src="images/icons-error.png" title="error" />
        <h1>Error</h1>
        <p id="error-massage"></p>
        <button type="button" onclick="closeErrorPopup();">OK</button>
    </div>
</div>

<?php

if (isset($_POST['submit'])) {
    $events = $_POST['events'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    include "db.php";
    $sql = "insert into bookinginfo (events,fname,lname,email,date)
    values ('$events', '$fname', '$lname', '$email', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo
            "<script type='text/javascript'>
                openPopup();
            </script>";
    } else {
        echo
            "<script type='text/javascript'> 
                openErrorPopup(`" . $conn->error . "`);
            </script>";
    }
}

include "footer.php" ?>