<?php include "header.php" ?>


        <style>

      .maindiv{
        width: 90%;
        height: 700px;
        position:relative;
        left: 50%;
        margin-top: 25%;
        margin-bottom: auto;
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

      
    </style>
  </head>

      <!--Navbar Starts-->
    
      <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid col-lg-11 mb-md-0">
          <a class="navbar-brand" href="main.html" >
          <img src="images/LogoMakr-7qPWOZ.jpg" alt="Website name FestEvent"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="services.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="contact.html">Contact</a>
              </li>
            </ul>
        </div>
        </div>
      </nav>
      <!--Navbar ends-->

        <h2 class="display-1 text-center">
          <strong>
                Gallery
          </strong>
        </h2>

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

      <!--gallery ends-->
      

<?php include "footer.php" ?>