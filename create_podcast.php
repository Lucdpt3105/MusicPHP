<?php require_once"dbconfig.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Balkaton</title>

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
  <!-- ***** Header Area End ***** -->

  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title mt-70">Create Podcast</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Create Podcast</li>
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
              <h2>Create Podcast</h2>
              </div>
           <?php 
			if(isset($_REQUEST['signup']))
			{
        extract($_REQUEST);
        $error=$_FILES["myfile"]["error"];
        $image=$_FILES["myfile"]["name"];
                  $type=$_FILES["myfile"]["type"];
                  $size=$_FILES["myfile"]["size"];
                  $tmp_name=$_FILES["myfile"]["tmp_name"];
                  move_uploaded_file($tmp_name,"admin/img/$image");
        
        
$currentDir = getcwd();
$errors = []; 
$fileName = $_FILES['music']['name'];
$fileSize = $_FILES['music']['size'];
$fileTmpName  = $_FILES['music']['tmp_name'];
  $fileType = $_FILES['music']['type'];
//exit;
if (isset($_POST['signup'])) {

   if ($_FILES["music"]["type"] != "audio/mp3" && $_FILES["music"]["type"] !="audio/mpeg") {
       $errors[] = "This file extension is not allowed. Please upload a Mp3  file";
   }
if (empty($errors)) 
{
       $didUpload = move_uploaded_file($fileTmpName, "admin/upload/".$fileName);

       if ($didUpload) {
           //echo "The file " . basename($fileName) . " has been uploaded";
    $n=iud("INSERT INTO `podcast`(`podcast_title`, `podcast_host`, `podcast_image`, `podcast_audio`) 
    VALUES ('$title','".$_SESSION['username']."','$image','$fileName')
       ");
				if($n==1)
				{
					echo"<div class='alert alert-success'>Successful</div>";
         // header("Location: http://localhost/SoundWave/login.php");
				}
				else
				{
					echo"<div class='alert alert-danger'>Something went wrong Please Try Again</div>";
				}
			    
			}
    }
    else
    {
      echo"<div class='alert alert-danger'>Something went wrong Please Try Again2</div>";
			
    }
  }
}	
			?>
			</br>
            <form  method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-12"> Podcast Title
                  <input type="text"   required   name="title"  id="title" 
                   class="form-control mb-30" placeholder="Podcast Title">
            
                </div>
                <div class="col-12"> Cover Image
                  <input type="file"   required   name="myfile"  id="fname" 
                  onblur="myFname()"  class="form-control mb-30" placeholder="Your First Name">
            
                </div>
                <div class="col-12">  Upload only mp3 music
                  <input type="file"  class="form-control mb-30"   accept=".mp3" name="music" >
            
                </div>
                
				<div class="col-12">
                  <button type="submit" name="signup" id="myBtn" class="btn poca-btn">Upload</button>
                </div>
			  </div>
            </form>
			
	      
          </div>
        </div>
		
      </div>
    </div>
  </section>
  
<?php include'footer.php' ?>
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