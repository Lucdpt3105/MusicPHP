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

  <title>Add Music | SoundWave</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "sidebar.php"; ?>

    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include "topbar.php"; ?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
            <h1 class="h3 mb-4 text-gray-800">Add Music</h1>
              <?php
              if (isset($_REQUEST['submit'])) {
                extract($_REQUEST);
                $error = $_FILES["myfile"]["error"];
                $image = $_FILES["myfile"]["name"];
                $type = $_FILES["myfile"]["type"];
                $size = $_FILES["myfile"]["size"];
                $tmp_name = $_FILES["myfile"]["tmp_name"];
                move_uploaded_file($tmp_name, "img/$image");


                $currentDir = getcwd();
                $errors = [];
                $fileName = $_FILES['music']['name'];
                $fileSize = $_FILES['music']['size'];
                $fileTmpName  = $_FILES['music']['tmp_name'];
                $fileType = $_FILES['music']['type'];
                //exit;
                if (isset($_POST['submit'])) {

                  if ($_FILES["music"]["type"] != "audio/mp3" && $_FILES["music"]["type"] != "audio/mpeg") {
                    $errors[] = "This file extension is not allowed. Please upload a Mp3  file";
                  }
                  if (empty($errors)) {
                    $didUpload = move_uploaded_file($fileTmpName, "upload/" . $fileName);

                    if ($didUpload) {
                      //echo "The file " . basename($fileName) . " has been uploaded";
                      $n = iud("INSERT INTO `audio`( `category_id`,`album_id`, `title`, `artist`, `image`, `audio`, `lyrics`) 
         VALUES ('','$album','$title','$artist','$image','$fileName','$lyrics')
					  ");

                      if ($n == 1) {
                        echo "<div class='alert alert-success'>Successful</div>";
                      } else {
                        echo "<div class='alert alert-danger'>Something Went Wrong</div>";
                      }
                    } else {
                      echo "An error occurred somewhere. Try again or contact the admin";
                    }
                  } else {
                    foreach ($errors as $error) {
                      echo $error . "These are the errors" . "\n";
                    }
                  }
                }
              }
              ?>
              <form class="user" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" name="title" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Music Title">
                </div>
                <div class="form-group">Select Artist
                  <select class="form-control " name="artist">
                    <option>Select Artist</option>
                    <?php
                    $yt = select("select * from artist");
                    while ($at = mysqli_fetch_array($yt)) {
                    ?>
                      <option value="<?= $at[0] ?>"><?= $at[1] ?></option>

                    <?php
                    }
                    ?>
                  </select>
                </div>
                <!-- <div class="form-group">
                  <input type="text" class="form-control" name="artist" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Artist Name">
                </div> -->

                <!-- <div class="form-group">Select Category
					<select class="form-control " name="cat" >
					<option>Select Category</option>
					<?php
          $y = select("select * from category ");
          while ($a = mysqli_fetch_array($y)) {
          ?>
					<option value="<?= $a[0] ?>"><?= $a[1] ?></option>

				<?php
          }
        ?>
					</select>
					</div> -->
                <div class="form-group">Select Album
                  <select class="form-control " name="album">
                    <option>Select Album</option>
                    <?php
                    $y = select("select * from album ");
                    while ($a = mysqli_fetch_array($y)) {
                    ?>
                      <option value="<?= $a[0] ?>"><?= $a[1] ?></option>

                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">Cover Image
                  <input type="file" class="form-control" name="myfile" id="exampleInputEmail" aria-describedby="emailHelp">
                </div>

                <div class="form-group">Upload Only mp3 Music File
                  <input type="file" class="form-control" accept=".mp3" name="music">
                </div>

                <div class="form-group">Song Lyrics( Do Not Use ' symbol )
                  <textarea class="form-control " name="lyrics" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Lyrics">
                    </textarea>
                </div>


                <input type="submit" name="submit" value="Upload" class="btn btn-primary btn-user btn-block">

                </a>
              </form>



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
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>