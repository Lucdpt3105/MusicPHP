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