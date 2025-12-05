<?php
require_once"dbconfig.php";
if(isset($_SESSION['adminlogin']))
{
	
}
else
{
	header("location:login.php");
}
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Category | SoundWave</title>

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
     <?php include"sidebar.php";?>
   
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php include"topbar.php";?>
   
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Category</h1>
		  <div class="row">
             <div class="col-lg-6">
			 <?php
				  if(isset($_REQUEST['submit']))
				  {
					  extract($_REQUEST);
					  $n=iud("UPDATE  `category` SET `category_name`='$category_name' where id='".$_REQUEST['id']."'");
					  
					  if($n==1)
					  {
						  echo"<div class='alert alert-success'>Successful</div>";
					  }
					  else
					  {
						  echo"<div class='alert alert-danger'>Something Went Wrong</div>";
					  }
				  }
				  ?>
				  
             <form class="user" method="post">
                  <?php
				  $a=select("select * from category where id='".$_REQUEST['id']."'");
				  while($t=mysqli_fetch_array($a))
				  {
				  ?>  <div class="form-group">
                      <input type="text" class="form-control form-control-user" value="<?=$t[1]?>" name="category_name" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Category">
                    </div>
					<?php
				  }
					?>
                    <input type="submit" name="submit"  value="Update" class="btn btn-primary btn-user btn-block">
                     
                    </a>
                  </form>
				  
				  
				  
        </div>
        </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include'footer.php' ?>
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
