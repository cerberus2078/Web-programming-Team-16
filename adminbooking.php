<?php
$title = "Admin booking Page";
include "adminheader.php";
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>    
    .table{
        border-collapse: collapse;
        box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3) ;
        border-radius:10px;
        margin:auto;
    }
    th,td{
        border:1px solid #f2f2f2;
        padding: 8px 30px;
        text-align: center;
        color:grey;
    }
    th{
        text-transform: uppercase ;
        font-weight: 500 ;
    }
    td{
        font-size:13px;
    }
    h1{
        text-align: center;
    }
</style>

<body>
    <h1>Customers Booking Information</h1>
    <div class="main">
        <div class="table-content">
            <table>
                <thead>
                    <tr>
                        <th>Events</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "db.php";
                        $selectquery = "select * from bookinginfo";
                        $query=mysqli_query($conn,$selectquery);
                        while($res=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $res['events']; ?></td>
                        <td><?php echo $res['fname']; ?></td>
                        <td><?php echo $res['lname']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['date']; ?></td>
                    </tr>
                       <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>


<?php 
include "adminfooter.php";
?>