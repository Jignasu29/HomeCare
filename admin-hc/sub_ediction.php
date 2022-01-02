<?php

include_once('crud.php');
$crud=new Crud();

if(isset($_REQUEST['edit_sub'])){
	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$cat=$_POST['cat'];
	$price=$_POST['pr'];

	$result=$crud->execute("update `service_subcatagory` SET Ser_SubCatgoryName='$name',Ser_CatagoryId='$cat',Price=$price where Ser_SubCatagoryID='$id'");

	if($result)
	{
		echo "Update successfully";
		//header("Location:sub_tb.php");
		echo '<script> window.location.href="sub_tb.php";</script>';
	}
}

?>