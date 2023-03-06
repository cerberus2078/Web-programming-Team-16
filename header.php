<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap group project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link class="stylesheet" href="style.css">
    <script src="booking.js" ></script>
  <style>
      body {
        background-color: rgb(36, 0, 52);
      }
  
      .navbar {
        background-color: #58426e;
        height: 100px;
      }

      .nav-item::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #fff;
        transition: width .3s;
    }

    .nav-item:hover::after {
        width: 100%;
        transition: width .3s;
    }
  

      footer {
        background-color: #58426e;
        height: 296px;
      }

      .btn{
        background-color: #58426e;
      }

      .img-fluid{
        padding-top: 30px;
        padding-bottom: 30px;
      }
      .block-white{
        color: rgb(255, 255, 255);
      }
    </style>
  
  </head>

  <body>
      <!--Navbar Starts-->
    
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid col-lg-11 mb-md-0">
          <a class="navbar-brand" href="index.php" >
          <img src="images/LogoMakr-7qPWOZ.jpg" alt="Website name FestEvent"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="events.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="logoff.php">Log Off</a>
              </li>
              
            </ul>
        </div>
        </div>
      </nav>
      <!--Navbar ends-->