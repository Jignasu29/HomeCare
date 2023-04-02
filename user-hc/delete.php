<?php

session_start();
require_once 'connection.php';


	$name=$_GET['name'];
  $eid=$_SESSION["cemail"];
	$delete="delete from cart where Ser_SubCatagoryName='$name' AND Customer_EmailID='$eid'";

	$res=mysqli_query($con,$delete) or die(mysqli_error($con));
    
  if($res)
  {
    echo '<script>alert("item deleted succesfully");</script>';
    echo '<script> window.location.href="cart.php";</script>';
  }
  else
  {
    echo '<script>alert("not deleted");</script>';
    echo '<script> window.location.href="cart.php";</script>';
  }
	
?>