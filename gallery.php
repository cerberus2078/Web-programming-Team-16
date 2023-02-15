<?php include "header.php" ?>


  <style>
      .h1{
        margin-top:3%;
        margin-left: 7%;
      }
      .maindiv{
        width: 90%;
        height: 700px;
        position:relative;
        left: 50%;
        margin-top: 25%;
        transform: translate(-50%,-50%);
        background-image: url('images/Images/slider1.jpg');
        background-size: 100%,100%;
        box-shadow: 1px 2px 10px 5px white;
        animation: slider 9s infinite linear;
      }

      @keyframes slider {
        0%{ background-image: url('images/Images/slider1.jpg');}
        35%{ background-image: url('images/Images/slider2.jpg');}
        75%{ background-image: url('images/Images/slider3.webp'); }
      }
      
      .container{
        margin-top:0%;
      }
    </style>
  </head>
  <div class=".section text-white">
        <h1 class="text-center">Gallery</h1>

        <!--image slider starts-->
          <div class="maindiv">
          </div>
        <!--image slider ends-->

        <!--gallery-->
        <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4">
            <img class="img-fluid shadow rounded mb-4" src="images/Images/event1.jpg" alt="event1">
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4">
            <img class="img-fluid shadow rounded mb-4" src="images/gallery2.webp" alt="event2">
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4">
            <img class="img-fluid shadow rounded mb-4" src="images/Images/event3.jpg" alt="event3">
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4">
            <img class="img-fluid shadow rounded mb-4" src="images/Concert.jpg" alt="event4">
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4">
            <img class="img-fluid shadow rounded mb-4" src="images/Images/event9.jpg" alt="event5">
          </div>

          <div class="col-sm-12 col-md-4 col-lg-4">
            <img class="img-fluid shadow rounded mb-4" src="images/gallery1.jpg" alt="event6">
          </div>
          
        </div>
      </div>
  </div>

      <!--gallery ends-->
      

<?php include "footer.php" ?>