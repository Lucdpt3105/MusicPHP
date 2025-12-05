<?php
require_once "dbconfig.php";
iud("update audio set view=view+1 where id='" . $_REQUEST['id'] . "'");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>SoundWave</title>

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
  <?php
  $p = select("SELECT * FROM `audio` INNER JOIN category on audio.album_id where audio.id='" . $_REQUEST['id'] . "'limit 1");
  while ($r = mysqli_fetch_array($p)) {
    extract($r);
  ?>
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <h2 class="title mt-70">Music by <?php
            $iop=select("select * from artist where id='$artist'");
          $ok=  mysqli_fetch_array($iop);
           echo $ok['artist_name'] ?></h2>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Song</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <?php
  $p = select("SELECT * FROM `audio` INNER JOIN category on audio.album_id where audio.id='" . $_REQUEST['id'] . "'limit 1");
  while ($r = mysqli_fetch_array($p)) {
    extract($r);
  ?>
    <div class="poca-featured-music-area mt-50">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="poca-music-area box-shadow d-flex align-items-center flex-wrap border" data-animation="fadeInUp" data-delay="900ms">
              <div class="poca-music-thumbnail">
                <img src="admin/img/<?= $image ?>" alt="">
              </div>
              <div class="poca-music-content">
                <h2><?= $title ?></h2>
                <div class="music-meta-data">
                  <p>By <a href="#" class="music-author">Admin</a> | Artist : <?php
          
           echo $ok['artist_name'] ?> <a href="#" class="music-catagory"></a> </p>
                </div>
                <!-- Music Player -->
                <?php
                if (isset($_SESSION['userlogin'])) {
                ?>
                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="admin/upload/<?= $audio ?>">
                    </audio>
                  </div>
                  <!-- Likes, Share & Download -->
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like </a>
                    <div>
                      <a href="#" class="mr-4"> <i class="fa fa-eye" aria-hidden="true"></i> <?= $view ?> View</a>
                      <a href="addplay.php?aid=<?= $r[0] ?>" class="mr-4">

                        <i class="fa fa-plus" aria-hidden="true"></i> Playlist</a>
                      <a href="admin/upload/<?= $audio ?>"><i class="fa fa-download" aria-hidden="true"></i> Download </a>
                    <?php

                  } else {
                    ?>
                      <a href="login.php"><img src="img/play.png" style="width:30px;height:30px"></a>
                    <?php
                  }
                    ?>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <!-- Contact Information -->
      </div>
    </div>
    <div class="row">
      <!-- Contact Information -->
      <div class="col-12 col-md-4">
      </div>
      <div class="col-12 col-md-3"> </br>
        <h1 style="text-align:center">LYRICS..</h1> </br> </br>
        <p style="text-align:center;font-weight:bold"><?= $lyrics ?></p>
      </div>
    </div>
    </div>

  <?php
  }
  ?>

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