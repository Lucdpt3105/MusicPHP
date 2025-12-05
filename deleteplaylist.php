<?php 
require_once"dbconfig.php";

extract($_REQUEST);
$n=iud("DELETE FROM playlist WHERE playlist.userid='" . $_SESSION['userlogin'] . "' ");

if($n==1)
{
	echo"<script>window.location='playlist.php';</script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
	window.location='home.php';</script>";
}

?>