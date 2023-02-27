<?php include "header.php";
?>

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$date = $_POST['date'];

<style>

.block-white{
        color: rgb(255, 255, 255);
      }
    
    </style>



<div class="container">

<select name="events">

<option>Festival Events</option>
<option>Concert</option>
<option>Musical Events</option>

</select>
    <div class="row py-4">
        <div class="col-md-5">
            <input type="text" name="fname" required placeholder="First Name" class="form-control">
        </div>
        </div>
        <div class="row py-4">
        <div class="col-md-5">
            <input type="text" name="lname" required placeholder="Last Name" class="form-control">
        </div>
</div>
<div class="row py-4">
        <div class="col-md-5">
            <input type="text" name="email" required placeholder="email_id" class="form-control">
        </div>
</div>
    
    <div class="row py-4">
        <div class="col-md-2 block-white">
            Booking Date: <input type="date" name="date" class="form-control"></div>
</div>

<div class="col-md-5">
            <input type="submit" value="submit">
    </div>
    </div>


<?php include "footer.php" ?>