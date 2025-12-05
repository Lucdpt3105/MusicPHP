<?php
require_once"dbconfig.php";
extract($_REQUEST);
$u=$_SESSION['userlogin'];
$n=iud("INSERT INTO `playlist`(`userid`, `audioid`) VALUES ('$u','$aid')");
if($n==1)
{
	echo"<script>alert('Successful');
	window.location='podcast.php';
	</script>";
}
else
{
	echo"<script>alert('Something Went Wrong');</script>";
}

?>