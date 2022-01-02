<?php

include_once('crud.php');

$crud=new Crud();

$id=$_GET['id'];

$result=$crud->execute("delete from service_catagory where Ser_CatagoryId='$id'");

//$res=$crud->delete($id,'service_catagory');

if($result){
	#header("Location:cat_tb.php");
	echo "deleted";
	echo '<script> window.location.href="cat_tb.php";</script>';
}

?>