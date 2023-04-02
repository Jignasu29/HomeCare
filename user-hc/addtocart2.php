<?php
session_start();
require_once 'connection.php';

$item_id1 = $_GET["id1"];
	$item_name1 =$_GET["name1"];
	$item_qty1 =1;
	$item_price1 = $_GET["price1"];
	$eid=$_SESSION["cemail"];

	$insert="insert into cart (Ser_SubCatagoryId,Ser_SubCatagoryName,Quantity,Price,Customer_EmailId) VAlUES('$item_id1','$item_name1','$item_qty1','$item_price1','$eid')";

	$res=mysqli_query($con,$insert) or die(mysqli_error($con));
    
  if($res)
  {
  	
    echo "<script>alert('item added succesfully');</script>";
    echo '<script> window.location.href="electronics_subcat.php"; </script>';
  }
  else
  {
    echo '<script>alert("not inserted");</script>';
    echo '<script> window.location.href="electronics_subcat.php";</script>';
  }

  ?>