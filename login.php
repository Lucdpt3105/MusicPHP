<?php require_once "dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Login | SoundWave</title>

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
          <h2 class="title mt-70">Login</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Contact Area Start ***** -->
  <section class="poca-contact-area mt-50 mb-100">
    <div class="container">

      <div class="row">
        <!-- Contact Information -->
        <div class="col-12 col-md-3"></div>

        <!-- Contact Form -->
        <div class="col-12 col-md-6">
          <div class="contact-form">
            <div class="contact-heading">
              <h2>Login</h2>
            </div>
            <!-- Form -->
            <form method="post">
              <div class="row">

                <div class="col-12">
                  <input type="email" name="email" class="form-control mb-30" placeholder="Your Email">
                </div>

                <div class="col-12">
                  <input type="password" name="password" class="form-control mb-30" placeholder="Your Password">
                </div>

                <div class="col-12">
                  <button type="submit" name="signin" class="btn poca-btn">Sign In</button>
                  <a href="./register.php" class="btn poca-btn">Create an account</a>
                </div>

              </div>
            </form>
            <?php
            if (isset($_REQUEST['signin'])) {
              extract($_REQUEST);
              $a = select("select * from register where email='$email' and password='$password'");
              $ab = mysqli_num_rows($a);
              if ($ab == 1) {
                while ($t = mysqli_fetch_array($a)) {
                  $_SESSION['userlogin'] = $t[0];
                  $_SESSION['username'] = $t[1];
                  echo "<script>window.location='index.php';</script>";
                }
              } else {
                echo "<div class='alert alert-danger'>Something went wrong Please Try Again</div>";
              }
            }

            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Contact Area End ***** -->

  <!-- ***** Newsletter Area Start ***** -->
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