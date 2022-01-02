<?php

include_once('crud.php');

$crud=new Crud();

$id=$_GET['id'];

$result=$crud->execute("delete from service_subcatagory where Ser_SubCatagoryId='$id'");

//$res=$crud->delete($id,'service_subcatagory');

if($result){
	//header("Location:sub_tb.php");
	echo "Deleted";
	echo '<script> window.location.href="sub_tb.php";</script>';
}

?>