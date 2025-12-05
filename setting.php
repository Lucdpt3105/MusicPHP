<?php
 require_once"dbconfig.php";
 ?>
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
          <h2 class="title mt-70">Update Profile</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
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
              <h2>Update Profile</h2>
              </div>
           <?php 
			if(isset($_REQUEST['signup']))
			{
				extract($_REQUEST);
				$n=iud("update `register` set `name`='$name', `email`='$email', `password`='$password',
        `first_name`='$fname',`last_name`='$lname' where id='".$_SESSION['userlogin']."'");
         
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
			$op=select("select * from register where id='".$_SESSION['userlogin']."'");
      $tt=mysqli_fetch_array($op);
			?>
			</br>
            <form  method="post">
              <div class="row">
                <div class="col-12">   <label id="nameeroor" class="text-danger"></label>
                  <input type="text"   required   name="name"  value="<?=$tt['name']?>" id="name" onblur="myFunction()" 
                   class="form-control mb-30" placeholder="User Name">
            
                </div>
                <div class="col-6">   <label id="fnameeroor" class="text-danger"></label>
                  <input type="text"   required   name="fname" value="<?=$tt['first_name']?>" id="fname" 
                  onblur="myFname()"  class="form-control mb-30" placeholder="Your First Name">
            
                </div>
                <div class="col-6">   <label id="lnameeroor" class="text-danger"></label>
                  <input type="text"   required   name="lname" value="<?=$tt['last_name']?>"  id="lname" 
                  onblur="mylname()"  class="form-control mb-30" placeholder="Your Last Name">
            
                </div>
                <div class="col-12"><label id="emaileroor" class="text-danger"></label>
                  <input type="email"   required value="<?=$tt['email']?>"  name="email" id="email" onblur="checkemail()"  class="form-control mb-30" placeholder="Your Email">
                </div>
                <!-- <div class="col-12"><label id="mobileeroor" class="text-danger"></label>
                  <input type="mobile"  required  name="mobile" id="mobile" onblur="checkmobile()" class="form-control mb-30" placeholder="Your Mobile">
                </div> -->
                <div class="col-12"><label id="passeroor" class="text-danger"></label>
                  <input type="password" required name="password" value="<?=$tt['password']?>"  id="pass" onblur="checkpass()" class="form-control mb-30" placeholder="Your Password">
                </div>
                
				<div class="col-12">
                  <button type="submit" name="signup" id="myBtn" class="btn poca-btn">Update</button>
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
  <script>
  const myFunction=(en)=>{
	  
	  let name=document.getElementById("name").value;
	  if(name=="" || name==null  )
	  {  document.getElementById("nameeroor").innerHTML="User name can't be empty";  
document.getElementById("name").style.border="1px solid red";

document.getElementById("myBtn").disabled = true;
return false;

	  }
	  else if(name.length>25 )
	  {
		    document.getElementById("nameeroor").innerHTML="User name length must be less then 14 character";
			document.getElementById("name").style.border="1px solid red";
      
document.getElementById("myBtn").disabled = true;
return false;
	  }
	  else if(name.length<3)
	  {
		    document.getElementById("nameeroor").innerHTML="User name length must be grater then 3 character";
			document.getElementById("name").style.border="1px solid red";
document.getElementById("myBtn").disabled = true;
return false;
	  }
	  else
	  {
      document.getElementById("nameeroor").innerHTML="";
		  document.getElementById("name").style.border="1px solid green";
document.getElementById("myBtn").disabled = false;

	  }
  }

  const myFname=(en)=>{
	  
	  let fname=document.getElementById("fname").value;
	  if(fname=="" || fname==null  )
	  {  document.getElementById("fnameeroor").innerHTML="First name can't be empty";  
document.getElementById("fname").style.border="1px solid red";

document.getElementById("myBtn").disabled = true;
return false;

	  }
	  else if(fname.length>15 )
	  {
		    document.getElementById("fnameeroor").innerHTML="Fname length must be less then 15 character";
			document.getElementById("fname").style.border="1px solid red";
      
document.getElementById("myBtn").disabled = true;
return false;
	  }
	  else if(fname.length<2)
	  {
		    document.getElementById("fnameeroor").innerHTML="First name length must be grater then 2 character";
			document.getElementById("fname").style.border="1px solid red";
document.getElementById("myBtn").disabled = true;
return false;
	  }
	  else
	  {
      document.getElementById("fnameeroor").innerHTML="";
		  document.getElementById("fname").style.border="1px solid green";
document.getElementById("myBtn").disabled = false;

	  }
  }
  const mylname=(en)=>{
	  
	  let lname=document.getElementById("lname").value;
	  if(lname=="" || lname==null  )
	  {  document.getElementById("lnameeroor").innerHTML="last name can't be empty";  
document.getElementById("lname").style.border="1px solid red";

document.getElementById("myBtn").disabled = true;
return false;

	  }
	  else if(lname.length>15 )
	  {
		    document.getElementById("lnameeroor").innerHTML="lname length must be less then 15 character";
			document.getElementById("lname").style.border="1px solid red";
      
document.getElementById("myBtn").disabled = true;
return false;
	  }
	  else if(lname.length<2)
	  {
		    document.getElementById("lnameeroor").innerHTML="last name length must be grater then 2 character";
			document.getElementById("lname").style.border="1px solid red";
document.getElementById("myBtn").disabled = true;
return false;
	  }
	  else
	  {
      document.getElementById("lnameeroor").innerHTML="";
		  document.getElementById("lname").style.border="1px solid green";
document.getElementById("myBtn").disabled = false;

	  }
  }

  const checkemail=()=>{
    let email=document.getElementById("email").value;
	 
    if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
  {
    document.getElementById("emaileroor").innerHTML="";
  document.getElementById("email").style.border="1px solid green";
document.getElementById("myBtn").disabled = false;

		 
  }
  else{
  document.getElementById("emaileroor").innerHTML="You have entered an invalid email address!";
  document.getElementById("email").style.border="1px solid red";
document.getElementById("myBtn").disabled = true;
 return (false);
  }
}

const checkpass=()=>{
    let pass=document.getElementById("pass").value;
	// alert(pass.length);
    if (pass=="")
  {
    
  document.getElementById("passeroor").innerHTML="You have entered an invalid password !";
  document.getElementById("pass").style.border="1px solid red";
document.getElementById("myBtn").disabled = true;
 return (false);
 } else if(pass.length<5)
  {
  document.getElementById("passeroor").innerHTML="Password length must be grater then 5 characters!";
  document.getElementById("pass").style.border="1px solid red";
document.getElementById("myBtn").disabled = true;
 return (false);
  }
  else if(pass.length>30)
  {
  document.getElementById("passeroor").innerHTML="Password length must be less then 30 characters !";
  document.getElementById("pass").style.border="1px solid red";
document.getElementById("myBtn").disabled = true;
 return (false);
  }
  else{
    
    document.getElementById("passeroor").innerHTML="";
  document.getElementById("pass").style.border="1px solid green";
document.getElementById("myBtn").disabled = false;
  }
}
  </script>

</body>

</html>