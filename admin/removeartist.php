<?php 
require_once"dbconfig.php";

extract($_REQUEST);
$n=iud("delete from artist where id='$id'");
if($n==1)
{
	echo"<script>window.location='viewartist.php';</script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
	window.location='viewartist.php';</script>";
}

?>