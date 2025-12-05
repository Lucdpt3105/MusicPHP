<?php 
require_once"dbconfig.php";

extract($_REQUEST);
$n=iud("delete from audio where id='$id'");
if($n==1)
{
	echo"<script>window.location='viewmusic.php';</script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
	window.location='viewmusic.php';</script>";
}

?>