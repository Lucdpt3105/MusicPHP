<?php
require_once "dbconfig.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Album | SoundWave</title>

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
  <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="welcome-text">
          <br>
          <h2><?php
              $k = select("select * from album where id='" . $_REQUEST['id'] . "'");
              $np = mysqli_fetch_array($k);
              echo ucfirst($np['album_name']);
              ?></h2>

        </div>
      </div>
    </div>
  </div>

  <!-- album-->

  <!-- ***** Latest Episodes Area Start ***** -->
  <section class="poca-latest-epiosodes section-padding-80">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">


            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>



    <div class="container">
      <div class="row poca-portfolio">

        <?php


        $opt = select("SELECT * FROM `audio` where album_id='" . $_REQUEST['id'] . "' ");
        while ($rrt = mysqli_fetch_array($opt)) {
          extract($rrt);
        ?>
          <div class="col-12 col-md-3 single_gallery_item panjabi wow fadeInUp" data-wow-delay="0.1s">




            <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
              <div class="poca-music-thumbnail">
                <img src="admin/img/<?= $image ?>" style="height:260px;width:100%" alt="">
              </div>
              <div class="poca-music-content text-center">
                <a href="des.php?id=<?= $rrt[0] ?>">
                  <h5><?= $title ?></h5>
                </a>

                <!-- Music Player -->

                <!-- Likes, Share & Download -->

              </div>
            </div>
          </div>
        <?php
        }
        ?>




      </div>
    </div>


  </section>
  <!-- ***** Newsletter Area End ***** -->


  <!-- end album -->

  <!-- ***** Footer Area Start ***** -->
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