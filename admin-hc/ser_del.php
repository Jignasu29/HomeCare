<?php

include_once('crud.php');

$crud=new Crud();

$id=$_GET['id'];

$result=$crud->execute("delete from services where Service_Id='$id'");

//$res=$crud->delete($id,'services');

if($result){
	//header("Location:tb_ser.php");
	echo "Deleted";
	echo '<script> window.location.href="ser_tb.php";</script>';
}

?>