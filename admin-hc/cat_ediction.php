<?php

include_once('crud.php');
$crud=new Crud();

if(isset($_REQUEST['edit_cat'])){
	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$sub=$_POST['ser'];


	$result=$crud->execute("update `service_catagory` SET Ser_CatagoryName='$name',Service_Id=$sub where Ser_CatagoryId='$id'");

	if($result)
	{
		echo "Update successfully";
		//header("Location:cat_tb.php");
		echo '<script> window.location.href="cat_tb.php";</script>';
	}
}

?>