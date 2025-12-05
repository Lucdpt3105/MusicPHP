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
  <title>Home | SoundWave</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <!-- <link rel="stylesheet" href="admin/css/play.css"> -->


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
          <h2 data-animation="fadeInUp" data-delay="100ms">
            <?php
            if (isset($_SESSION['username'])) {
              echo "Hello, " . $_SESSION['username'];
            } else {
              echo "Subscribe Today";
            }
            ?>
          </h2>
          <h5 data-animation="fadeInUp" data-delay="160ms">Where words leave off, music begins.
          </h5>

        </div>
      </div>
    </div>
  </div>

  <!-- player -->

  <section>

    <?php
    $p = select("SELECT * FROM `audio` ORDER BY RAND()LIMIT 1");
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
                    <p>By <a href="#" class="music-author">Admin</a> | Artist : <?= $artist ?> <a href="#" class="music-catagory"></a> </p>
                  </div>
                  <!-- Music Player -->
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php
    }
    ?>

    <!-- end player -->

    <!-- ***** Breadcrumb Area End ***** -->

    <!-- main contant -->

    <section class="poca-latest-epiosodes section-padding-80">
      <div class="container">
        <div class="row">
          <!-- Section Heading -->
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Latest Album</h2>
              <div class="line"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- //============================================================================================ -->
      <!-- Projects Menu -->
      <div class="container">
        <div class="poca-projects-menu mb-16 wow fadeInUp" data-wow-delay="0.3s">
          <div class="text-center portfolio-menu">
            <button class="btn active" data-filter="*">All</button>
            <button class="btn" data-filter=".hindi">Hindi</button>
            <button class="btn" data-filter=".eng">English</button>
            <button class="btn" data-filter=".panjabi">Punjabi</button>
          </div>
        </div>
      </div>
      </br>
      <div class="container">
        <div class="row poca-portfolio">

          <?php

          $opt = select("SELECT * FROM album where cat_id=3 ");
          while ($rrt = mysqli_fetch_array($opt)) {
            extract($rrt)
          ?>
            <div class="col-12 col-md-3 single_gallery_item eng wow fadeInUp" data-wow-delay="0.1s">
              <!-- Welcome Music Area -->
              <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
                <div class="poca-music-thumbnail">
                  <img src="admin/img/<?= $album_image ?>" style="height:260px;width:100%" alt="">
                </div>
                <div class="poca-music-content text-center">
                  <a href="album.php?id=<?= $rrt[0] ?>">
                    <h5><?php if (strlen($album_name) > 16) {
                          echo substr($album_name, 0, 16) . "..";
                        } else {
                          echo $album_name;
                        } ?></h5>
                  </a><?php
                      if (isset($_SESSION['userlogin'])) {
                      ?>

                  <?php

                      }
                  ?>
                </div>
              </div>
            </div>
          <?php
          }

          $opt = select("SELECT * FROM `album` where cat_id=6");
          while ($rrt = mysqli_fetch_array($opt)) {
            extract($rrt);
          ?>
            <div class="col-12 col-md-3 single_gallery_item hindi wow fadeInUp" data-wow-delay="0.1s">
              <!-- Welcome Music Area -->
              <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
                <div class="poca-music-thumbnail">
                  <img src="admin/img/<?= $album_image ?>" style="height:260px;width:100%" alt="">
                </div>
                <div class="poca-music-content text-center">
                  <a href="album.php?id=<?= $rrt[0] ?>">
                    <h5><?php if (strlen($album_name) > 16) {
                          echo substr($album_name, 0, 16) . "..";
                        } else {
                          echo $album_name;
                        } ?></h5>
                  </a><?php
                      if (isset($_SESSION['userlogin'])) {
                      ?>
                  <?php

                      }
                  ?>
                </div>
              </div>
            </div>
          <?php
          }

          $opt = select("SELECT * FROM `album` where cat_id=7 ");
          while ($rrt = mysqli_fetch_array($opt)) {
            extract($rrt);
          ?>
            <div class="col-12 col-md-3 single_gallery_item panjabi wow fadeInUp" data-wow-delay="0.1s">
              <!-- Welcome Music Area -->
              <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
                <div class="poca-music-thumbnail">
                  <img src="admin/img/<?= $album_image ?>" style="height:260px;width:100%" alt="">
                </div>
                <div class="poca-music-content text-center">
                  <a href="album.php?id=<?= $rrt[0] ?>">
                    <h5><?php if (strlen($album_name) > 16) {
                          echo substr($album_name, 0, 16) . "..";
                        } else {
                          echo $album_name;
                        } ?></h5>
                        </a><?php
                            if (isset($_SESSION['userlogin'])) {
                            ?>
  
                        <?php
  
                            }
                        ?>
                      </div>
                    </div>
                  </div>
                <?php
              } 
            

            $opt = select("SELECT * FROM album where cat_id=8 ");
            while ($rrt = mysqli_fetch_array($opt)) {
              extract($rrt);
              ?>
                <div class="col-12 col-md-3 single_gallery_item Marathi wow fadeInUp" data-wow-delay="0.1s">
                  <!-- Welcome Music Area -->
                  <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
                    <div class="poca-music-thumbnail">
                      <img src="admin/img/<?= $album_image ?>" style="height:200px;width:100%" alt="">
                    </div>
                    <div class="poca-music-content text-center">
                      <a href="album.php?id=<?= $rrt[0] ?>">
                        <h5><?php if (strlen($album_name) > 16) {
                              echo substr($album_name, 0, 16) . "..";
                            } else {
                              echo $album_name;
                            } ?></h5>
                      </a><?php
                          if (isset($_SESSION['userlogin'])) {
                          ?>

                      <?php

                          }
                      ?>
                    </div>
                  </div>
                </div>
              <?php
            }
              ?>




              </div>
            </div>


    </section>

<!-- artist section -->

<section class="poca-latest-epiosodes section-padding-80">
      <div class="container">
        <div class="row">
          <!-- Section Heading -->
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>Search By Artist</h2>
              <div class="line"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- //============================================================================================ -->
      <!-- Projects Menu -->
      <div class="container">
        <div class="poca-projects-menu mb-16 wow fadeInUp" data-wow-delay="0.3s">
          <!-- <div class="text-center portfolio-menu">
            <button class="btn active" data-filter="*">All</button>
            <button class="btn" data-filter=".artisthindi">Hindi</button>
            <button class="btn" data-filter=".artisteng">English</button>
            <button class="btn" data-filter=".artistpanjabi">Panjabi</button>
          </div> -->
        </div>
      </div>
      </br>
      <div class="container">
        <div class="row poca-portfolio">

          <?php

          $optt = select("SELECT * FROM artist");
          while ($rrtt = mysqli_fetch_array($optt)) {
            extract($rrtt)
          ?>
            <div class="col-12 col-md-3 single_gallery_item eng wow fadeInUp" data-wow-delay="0.1s">
              <!-- Welcome Music Area -->
              <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
                <div class="poca-music-thumbnail">
                  <img src="admin/img/<?= $artist_image ?>" style="height:260px;width:100%" alt="">
                </div>
                <div class="poca-music-content text-center">
                  <a href="artist.php?id=<?= $rrtt[0] ?>">
                    <h5><?php if (strlen($artist_name) > 16) {
                          echo substr($artist_name, 0, 16) . "..";
                        } else {
                          echo $artist_name;
                        } ?></h5>
                  </a><?php
                      if (isset($_SESSION['userlogin'])) {
                      ?>

                  <?php

                      }
                  ?>
                </div>
              </div>
            </div>
          <?php
          }

          
          ?>
            




              </div>
            </div>


    </section>
<!-- artist sectoion end  -->

<!-- new release -->

<section class="poca-latest-epiosodes section-padding-80">
      <div class="container">
        <div class="row">
          <!-- Section Heading -->
          <div class="col-12">
            <div class="section-heading text-center">
              <h2>New Release</h2>
              <div class="line"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- //============================================================================================ -->
      <!-- Projects Menu -->
      <div class="container">
        <div class="poca-projects-menu mb-16 wow fadeInUp" data-wow-delay="0.3s">
          <!-- <div class="text-center portfolio-menu">
            <button class="btn active" data-filter="*">All</button>
            <button class="btn" data-filter=".artisthindi">Hindi</button>
            <button class="btn" data-filter=".artisteng">English</button>
            <button class="btn" data-filter=".artistpanjabi">Panjabi</button>
          </div> -->
        </div>
      </div>
      </br>
      <div class="container">
        <div class="row poca-portfolio">

          <?php

          $opttr = select("SELECT * FROM audio order by id desc limit 4   ");
          while ($rrttr = mysqli_fetch_array($opttr)) {
            extract($rrttr)
          ?>
            <div class="col-12 col-md-3 single_gallery_item eng wow fadeInUp" data-wow-delay="0.1s">
              <!-- Welcome Music Area -->
              <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
                <div class="poca-music-thumbnail">
                <img src="admin/img/<?= $image ?>" style="height:260px;width:100%" alt="">
               </div>
                <div class="poca-music-content text-center">
                  <a href="artist.php?id=<?= $rrttr[0] ?>">
                  <div class="poca-music-content text-center">
                <a href="des.php?id=<?= $rrttr[0] ?>">
                  <h5><?= $title ?></h5>
                </a>
                </div>
              </div>
              </div></div>
          <?php
          }

          
          ?>
            




              </div>
            </div>


    </section>
<!-- new release -->
    <?php include 'footer.php' ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/poca.bundle.js"></script>
    <script src="js/default-assets/active.js"></script>

</body>

</html>