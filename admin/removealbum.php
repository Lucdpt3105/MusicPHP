<?php 
require_once"dbconfig.php";

extract($_REQUEST);
$n=iud("delete from album where id='$id'");
if($n==1)
{
	echo"<script>window.location='viewalbum.php';</script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
	window.location='viewalbum.php';</script>";
}

?>