<?php include "header.php";
?>



<style>
    .contain {
        text-align: center;
        width: 500px;
        padding-bottom: 20px;
        margin: 16px auto;

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

    .events {
        padding: 3px 5px;
        border-radius: 10px;
        font-size: 18px;
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
</style>


<h1>Fill Your Information</h1>

<div class="contain">
    <form method="post" action="">
        <select name="events" class="events">

            <option value="Festival"> Festival Events </option>
            <option value="Concert"> Concert Events </option>
            <option value="Musical"> Musical Events </option>

        </select>

        <div class="row py-3">
            <div class="col">
                <input type="text" name="fname" required placeholder="First Name" class="form-control" required>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <input type="text" name="lname" required placeholder="Last Name" class="form-control" required>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <input type="text" name="email" required placeholder="Email_id" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h6>Book Date</h6>
                <input type="date" name="date" class="form-control">
            </div>
        </div>
        <br>
        <button type="submit" name="submit" class="submit">Submit</button>
    </form>
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