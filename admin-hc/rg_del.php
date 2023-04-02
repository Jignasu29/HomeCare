<?php

include_once('crud.php');

$crud=new Crud();

#$id=$crud->escape_string($_GET['id']);

$id=$_GET["id"];

$result=$crud->execute("delete from ragistration where Customer_EmailId='$id'");

//$res=$crud->delete($id,'ragistration');

if($result){
	#header("Location:reg_tb.php");
	echo "Deleted";
	echo '<script> window.location.href="reg_tb.php";</script>';
}

?>