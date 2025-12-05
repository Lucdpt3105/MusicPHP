<?php require_once "dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>About | SoundWave</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader-thumbnail">
      <img src="./img/core-img/preloader.png" alt="">
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <?php include "nav.php"; ?>

      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title mt-70">About Us</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ****** About Us Area Start ******* -->
  <section class="about-us-area section-padding-0-80 mt-50">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="about-us-content">
            <img src="./img/bg-img/20.jpg" class="mb-30" alt="">
            <h1>About</h1>
            <p>With SoundWave, it’s easy to find the right music for every moment – on your phone, your
              computer, your tablet and more.</p>
            <p>There are millions of tracks on SoundWave. So whether you’re behind the wheel, working
              out, partying or relaxing, the right music is always at your fingertips. Choose what you
              want to listen to, or let SoundWave surprise you. </p>


            <!-- Blockquote -->
            <blockquote class="poca-blockquote d-flex">
              <div class="icon">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <div class="text">
                </h6>
              </div>
            </blockquote>

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php' ?>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/poca.bundle.js"></script>
  <!-- Active js -->
  <script src="js/default-assets/active.js"></script>

</body>

</html>