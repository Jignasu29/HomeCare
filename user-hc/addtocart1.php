<?php
session_start();
require_once 'connection.php';

  $item_id2 = $_GET["id2"];
	$item_name2 =$_GET["name2"];
	$item_qty2 =1;
	$item_price2 = $_GET["price2"];
	$eid=$_SESSION["cemail"];

	$insert="insert into cart (Ser_SubCatagoryId,Ser_SubCatagoryName,Quantity,Price,Customer_EmailId) VAlUES('$item_id2','$item_name2','$item_qty2','$item_price2','$eid')";

	$res=mysqli_query($con,$insert) or die(mysqli_error($con));
    
  if($res)
  {
  	
    echo "<script>alert('item added succesfully');</script>";
    echo '<script> window.location.href="furniture_subcat.php"; </script>';
  }
  else
  {
    echo '<script>alert("not inserted");</script>';
    echo '<script> window.location.href="furniture_subcat.php";</script>';
  }



?>