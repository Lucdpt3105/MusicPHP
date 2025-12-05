<?php
require_once"dbconfig.php";

?><!DOCTYPE html>
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
        <?php include"nav.php";?>
      </div>
    </div>
  </header>
   <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title mt-70">Podcast</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Podcast</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Featured Music Area Start ***** --><?php
				$p=select("SELECT * FROM `podcast`");
				while($r=mysqli_fetch_array($p))
				{
					extract($r);
				?>
  <div class="poca-featured-music-area mt-50">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="poca-music-area box-shadow d-flex align-items-center flex-wrap border" data-animation="fadeInUp" data-delay="900ms">
            <div class="poca-music-thumbnail">
              <img src="admin/img/<?=$podcast_image?>" alt="">
            </div>
            <div class="poca-music-content">
              <span class="music-published-date"></span>
             <a href="des.php?id=<?=$r[0]?>"> <h2><?=$podcast_title?></h2></a>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author"></a><?=$podcast_host?><a href="#" class="music-catagory"></a></p>
              </div>
              <!-- Music Player -->
			  
			  
			  
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="admin/upload/<?=$podcast_audio?>">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-podcast" aria-hidden="true"></i> Live </a>
                <div>
                  <a href="admin/upload/<?=$audio?>"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
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
  <!-- ***** Featured Music Area End ***** -->

  <!-- ***** Latest Episodes Area Start ***** -->
 
  <?php include'footer.php' ?>
 
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