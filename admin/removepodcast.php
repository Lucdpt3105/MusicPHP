<?php 
require_once"dbconfig.php";

extract($_REQUEST);
$n=iud("delete from podcast where podcost_id='$id'");
if($n==1)
{
	echo"<script>window.location='viewpodcast.php';</script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
	window.location='viewpodcast.php';</script>";
}

?>