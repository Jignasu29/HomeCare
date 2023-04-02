<?php

session_start();
require_once 'connection.php';

	# code...
	$item_id = $_GET["id"];
	$item_name =$_GET["name"];
	$item_qty =1;
	$item_price = $_GET["price"];
	$eid=$_SESSION["cemail"];

	$insert="insert into cart (Ser_SubCatagoryId,Ser_SubCatagoryName,Quantity,Price,Customer_EmailId) VAlUES('$item_id','$item_name','$item_qty','$item_price','$eid')";

	$res=mysqli_query($con,$insert) or die(mysqli_error($con));
    
  if($res)
  {
  	
    echo "<script>alert('item added succesfully');</script>";
    echo '<script> window.location.href="electric_subcat.php"; </script>';
  }
  else
  {
    echo '<script>alert("not inserted");</script>';
    echo '<script> window.location.href="electric_subcat.php";</script>';
  }


 ?>