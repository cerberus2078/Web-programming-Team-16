<?php include "header.php";
?>



<style>
 .contain{
    text-align: center;
    width: 500px;
    padding-bottom: 20px;
    margin: 16px auto;

 }   
.userbooking{
        justify-content: center;
        align-items: center;
    }
    
.block-white{
        color: rgb(255, 255, 255);
      }

    h1{
        text-align: center;
        margin-bottom: 40px;
        color: rgb(255, 255, 255);
    }
    h6{
        text-align: center;
        margin-bottom: 40px;
        color: rgb(255, 255, 255);
    }
    </style>


<h1>Fill Your Information</h1>

<div class="contain">

<select name="events">

<option>Festival Events</option>
<option>Concert</option>
<option>Musical Events</option>

</select>

    <div class="row py-3">
        <div class="col">
            <input type="text" name="fname" required placeholder="First Name" class="form-control">
        </div>
     </div>

    <div class="row py-3">
        <div class="col">
            <input type="text" name="lname" required placeholder="Last Name" class="form-control">
        </div>
    </div>

    <div class="row py-3">
        <div class="col">
            <input type="text" name="email" required placeholder="Email_id" class="form-control">
        </div>
    </div>
    
    <div class="row py-1">
        <div class="col">
            <h6>Book Date</h6>
            <input type="date" name="date" class="form-control">
        </div>
    </div>

    <div class="col">
            <input type="submit" value="submit">
    </div>
</div>



<?php include "footer.php" ?>