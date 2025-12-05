<?php
require_once "dbconfig.php";
if (isset($_SESSION['adminlogin'])) {
} else {
  header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SoundWave - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/play.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "sidebar.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include "topbar.php"; ?>
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

          </div>

          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Audio (Total)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                          $y = select("select * from audio");
                                                                          echo mysqli_num_rows($y);
                                                                          ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-music fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">User (Total)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                          $y = select("select * from register");
                                                                          echo mysqli_num_rows($y);
                                                                          ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Podcast</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php
                                                                                    $y = select("select * from podcast");
                                                                                    echo mysqli_num_rows($y);
                                                                                    ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Album</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                          $y = select("select * from album");
                                                                          echo mysqli_num_rows($y);
                                                                          ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <!-- Content Row -- > -->


          <!-- player -->

          <!-- Tracks used in this music/audio player application are free to use. I downloaded them from Soundcloud and NCS websites. I am not the owner of these tracks. -->




          <!-- <a href="https://www.youtube.com/channel/UC7hSS_eujjZOEQrjsda76gA/videos" target="_blank" id="ytd-url">My YouTube Channel</a> -->

          <!-- player -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">All Music</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="table-responsive">
                    <?php

                    $query = "SELECT * FROM `audio` order by audio.id desc limit 5";
                    $result = mysqli_query($cid, $query) or die("Query Failed");

                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Artist Name</th>
                          </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                          <tbody>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['artist']; ?></td>
                          </tbody>
                        <?php } ?>

                      </table>

                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -- -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Music Player</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div> -->
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body"><br><br><br>



                  <div class="audiosvg-container">
                    <h1 class="play-text">play</h1>
                    <h1 class="pause-text">pause</h1>
                    <div class="active-box" onclick="pauseAudio()"></div>
                    <svg class="audiosvg" onclick="playAudio()" viewBox="0 0 250 250" style="enable-background:new 0 0 250 250;" xml:space="preserve">
                      <style type="text/css">
                        .st0 {
                          fill: none;
                          stroke: #486CA3;
                          stroke-width: 5.6943;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-miterlimit: 10;
                        }

                        .st1 {
                          fill: #7691BA;
                        }

                        .st2 {
                          fill: none;
                          stroke: #1A478C;
                          stroke-width: 5.8983;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-miterlimit: 10;
                        }

                        .st3 {
                          fill: #1A478C;
                        }

                        .st4 {
                          fill: #486CA3;
                        }

                        .st5 {
                          fill: none;
                          stroke: #1A478C;
                          stroke-width: 7.5924;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-miterlimit: 10;
                        }

                        .st6 {
                          fill: #FFFFFF;
                        }

                        .st7 {
                          fill: none;
                          stroke: #7691BA;
                          stroke-width: 13.2866;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-miterlimit: 10;
                        }

                        .st8 {
                          fill: none;
                          stroke: #486CA3;
                          stroke-width: 4.4082;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-miterlimit: 10;
                        }

                        .st9 {
                          fill: none;
                          stroke: #fff;
                          stroke-width: 0.5;
                          stroke-linecap: round;
                          stroke-linejoin: round;
                          stroke-miterlimit: 10;
                        }
                      </style>
                      <g>
                        <g>
                          <path class="st1" d="M72.5,38.6c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.2-0.1,0.3-0.2c0.1,0,0.2-0.1,0.3-0.1
													h4.6c0.2,0,0.4,0.1,0.5,0.2c0.1,0.1,0.3,0.2,0.3,0.3l0.5,1l9.5,24.4c0.1,0.2,0.1,0.4-0.1,0.6c-0.1,0.2-0.4,0.2-0.7,0.2h-5.2
													c-0.3,0-0.5-0.1-0.6-0.2c-0.2-0.1-0.3-0.3-0.4-0.5c-0.2-0.6-0.5-1.2-0.7-1.8c-0.2-0.6-0.5-1.2-0.7-1.8H71
													c-0.2,0.6-0.5,1.2-0.7,1.8c-0.2,0.6-0.5,1.2-0.7,1.8c-0.2,0.4-0.5,0.7-0.9,0.7h-5.3c-0.2,0-0.4-0.1-0.6-0.2
													c-0.2-0.1-0.2-0.3-0.1-0.5L72.5,38.6z M75.8,46.3c-0.2,0.6-0.5,1.3-0.7,2c-0.2,0.7-0.5,1.4-0.7,2.1c-0.2,0.7-0.5,1.4-0.7,2.1
													c-0.2,0.7-0.5,1.4-0.7,2h5.5L75.8,46.3z" />
                          <path class="st1" d="M99.3,54c0,0.9,0.1,1.6,0.4,2.3c0.2,0.6,0.6,1.1,1,1.5c0.4,0.4,0.9,0.7,1.4,0.9s1.1,0.3,1.7,0.3
													c0.6,0,1.2-0.1,1.7-0.3c0.5-0.2,1-0.5,1.4-0.9c0.4-0.4,0.7-0.9,1-1.5s0.4-1.3,0.4-2.1V38.7c0-0.2,0.1-0.4,0.2-0.6
													c0.1-0.2,0.4-0.2,0.6-0.2h5.3c0.3,0,0.5,0.1,0.6,0.2c0.2,0.2,0.2,0.3,0.2,0.5v15.2c0,2.1-0.3,3.9-0.9,5.3
													c-0.6,1.4-1.4,2.6-2.5,3.4c-1,0.9-2.3,1.5-3.6,1.9s-2.8,0.6-4.3,0.6c-1.5,0-3-0.2-4.3-0.6c-1.4-0.4-2.6-1-3.6-1.9
													c-1-0.9-1.9-2-2.5-3.5c-0.6-1.4-0.9-3.2-0.9-5.2V38.7c0-0.2,0.1-0.4,0.2-0.5c0.1-0.2,0.3-0.2,0.5-0.2h5.4c0.2,0,0.4,0.1,0.6,0.2
													c0.2,0.2,0.3,0.3,0.3,0.6V54z" />
                          <path class="st1" d="M143.5,51.3c0,1.3-0.2,2.5-0.5,3.6c-0.3,1.1-0.8,2.2-1.4,3.2c-0.6,1-1.3,1.9-2.2,2.7
													c-0.8,0.8-1.8,1.5-2.8,2.1c-1,0.6-2.1,1-3.3,1.3c-1.2,0.3-2.4,0.5-3.7,0.5h-8.9c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.3-0.3-0.3-0.6
													V38.7c0-0.3,0.1-0.5,0.2-0.6c0.1-0.2,0.3-0.2,0.6-0.2h8.9c1.3,0,2.5,0.2,3.6,0.5s2.3,0.8,3.3,1.3c1,0.6,1.9,1.3,2.8,2.1
													c0.8,0.8,1.6,1.7,2.2,2.7c0.6,1,1.1,2.1,1.4,3.2S143.5,50,143.5,51.3z M127,44.3v13.8h1.5c0.3,0,0.5,0,0.8,0c0.3,0,0.5,0,0.8-0.1
													c0.9-0.1,1.7-0.3,2.5-0.7s1.5-0.8,2-1.4c0.6-0.6,1-1.3,1.4-2.1c0.3-0.8,0.5-1.7,0.5-2.6c0-1-0.2-1.9-0.6-2.8
													c-0.4-0.8-0.9-1.6-1.5-2.2c-0.6-0.6-1.4-1.1-2.3-1.4c-0.9-0.3-1.8-0.5-2.8-0.5H127z" />
                          <path class="st1" d="M148.2,38.7c0-0.2,0.1-0.4,0.2-0.6c0.1-0.2,0.3-0.2,0.6-0.2h5.3c0.2,0,0.4,0.1,0.6,0.2s0.3,0.3,0.3,0.6v25.1
													c0,0.5-0.3,0.8-0.9,0.8H149c-0.5,0-0.8-0.3-0.8-0.8V38.7z" />
                          <path class="st1" d="M159.8,51.3c0-1.3,0.2-2.5,0.5-3.7s0.8-2.3,1.4-3.3s1.3-2,2.2-2.8c0.8-0.8,1.8-1.6,2.8-2.2
													c1-0.6,2.1-1.1,3.3-1.4s2.4-0.5,3.7-0.5c1.3,0,2.5,0.2,3.7,0.5s2.3,0.8,3.3,1.4c1,0.6,2,1.3,2.8,2.2c0.8,0.8,1.6,1.8,2.2,2.8
													c0.6,1,1.1,2.1,1.4,3.3s0.5,2.4,0.5,3.7s-0.2,2.5-0.5,3.7c-0.3,1.2-0.8,2.3-1.4,3.3c-0.6,1-1.3,1.9-2.2,2.8
													c-0.8,0.8-1.8,1.6-2.8,2.2c-1,0.6-2.1,1.1-3.3,1.4c-1.2,0.3-2.4,0.5-3.7,0.5c-1.3,0-2.5-0.2-3.7-0.5c-1.2-0.3-2.3-0.8-3.3-1.4
													c-1-0.6-1.9-1.3-2.8-2.2s-1.6-1.8-2.2-2.8s-1.1-2.1-1.4-3.3C159.9,53.8,159.8,52.5,159.8,51.3z M166.7,51.3c0,1,0.2,1.9,0.5,2.8
													c0.3,0.9,0.8,1.6,1.4,2.3c0.6,0.6,1.3,1.1,2.1,1.5c0.8,0.4,1.7,0.5,2.7,0.5c1,0,1.9-0.2,2.7-0.5s1.6-0.9,2.2-1.5
													c0.6-0.6,1.1-1.4,1.4-2.3c0.3-0.9,0.5-1.8,0.5-2.8c0-1-0.2-1.9-0.5-2.8c-0.3-0.9-0.8-1.6-1.4-2.3c-0.6-0.6-1.3-1.2-2.2-1.5
													s-1.7-0.6-2.7-0.6c-1,0-1.9,0.2-2.7,0.6c-0.8,0.4-1.5,0.9-2.1,1.5c-0.6,0.6-1.1,1.4-1.4,2.3C166.9,49.3,166.7,50.3,166.7,51.3z" />
                        </g>
                        <g>
                          <g id="svg-audio">
                            <circle class="st5" cx="125.5" cy="154" r="66.3" />
                            <path class="st3" d="M64.3,179.5c5.1,12.2,13.7,22.6,24.6,29.8l36.6-55.2L64.3,179.5z" />
                            <polygon class="st3" points="181.4,118.5 170.8,106.4 125.5,154 			" />
                            <g>
                              <g id="hover-circle">
                                <circle class="st4" cx="125.5" cy="154" r="24.7" />
                              </g>

                              <g id="ripple-circle">
                                <circle class="st9" cx="125.5" cy="154" r="9.6" />
                                <circle class="st9" cx="125.5" cy="154" r="9.6" />
                                <circle class="st9" cx="125.5" cy="154" r="9.6" />
                              </g>
                              <circle class="st3" cx="125.5" cy="154" r="9.6" />
                            </g>
                          </g>
                          <path class="st2" d="M202.8,128.2H214c3.8,0,6.8-2.4,6.8-5.4V18.7c0-3-3.1-5.4-6.8-5.4H36c-3.8,0-6.8,2.4-6.8,5.4v104.1
													c0,3,3.1,5.4,6.8,5.4h13.1" />
                          <path class="st7" d="M160,196.7l12.2,16.5c2.5,3.3,6.4,6.3,11.6,7.4" />
                          <circle class="st8" cx="203.1" cy="224.6" r="9.9" />
                          <g>
                            <g>
                              <circle class="st1" cx="189" cy="82.3" r="4.4" />
                              <circle class="st4" cx="189" cy="98.1" r="4.4" />
                            </g>
                          </g>
                          <path class="st4" d="M169.5,197.3c1.9,2.5,1.5,6-1,8l-2.2,1.7c-2.5,1.9-6,1.5-8-1l-7.3-9.4c-1.9-2.5-1.5-6,1-8l2.2-1.7
													c2.5-1.9,6-1.5,8,1L169.5,197.3z" />
                          <path class="st8" d="M160,196.7l12.2,16.5c2.5,3.3,6.4,6.3,11.6,7.4c6.1,1.2,19.2,3.8,19.2,3.8" />
                        </g>
                        <g id="svg-line">
                          <line class="st0" x1="162.7" y1="236.7" x2="87.3" y2="236.7" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <br><br><br>

                <!-- <div class="mt-4 text-center small">
                  <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> Direct
                  </span>
                  <span class="mr-2">
                    <i class="fas fa-circle text-success"></i> Social
                  </span>
                  <span class="mr-2">
                    <i class="fas fa-circle text-info"></i> Referral
                  </span>
                </div> -->
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- <!-- Project Card Example -- -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>

              <!-- <!-- Color System -- -->
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Primary
                      <div class="text-white-50 small">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                    <div class="card-body">
                      Success
                      <div class="text-white-50 small">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      Info
                      <div class="text-white-50 small">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                      Warning
                      <div class="text-white-50 small">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                      Danger
                      <div class="text-white-50 small">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                      Secondary
                      <div class="text-white-50 small">#858796</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-lg-6 mb-4">

              <!-- <!-- Illustrations -- -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
              </div>

              <!-- <!-- Approach  -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'footer.php' ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/play.js"></script>
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>