<nav class="classy-navbar justify-content-between" id="pocaNav">

  <!-- Logo -->
  <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" width="225" height="30" alt=""></a>

  <!-- Navbar Toggler -->
  <div class="classy-navbar-toggler">
    <span class="navbarToggler"><span></span><span></span><span></span></span>
  </div>

  <!-- Menu -->
  <div class="classy-menu">

    <!-- Menu Close Button -->
    <div class="classycloseIcon">
      <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
    </div>

    <!-- Nav Start -->
    <div class="classynav">
      <ul id="nav">
        <li class="current-item"><a href="./index.php">Home</a></li>
        <li><a href="./about.php">About</a></li>
        <?php
        if (isset($_SESSION['userlogin'])) {

        ?>
          <li><a href="./playlist.php">Playlist</a></li>
          <li><a href="./create_podcast.php">Create Podcast</a></li>
          <li><a href="./podcast.php">Podcast</a></li>
          <li><a href="./setting.php">
          Setting</a></li>
          <li><a href="./logout.php">
              Logout</a></li>

        <?php
        } else {
        ?>
          <li><a href="./login.php">Login</a></li>

        <?php
        }
        ?>


      </ul>

      <!-- Top Search Area -->
      <div class="top-search-area">
        <form action="index.php" method="post">
          <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </div>



    </div>
    <!-- Nav End -->
  </div>
</nav>