<?php

include_once('crud.php');
$crud=new Crud();

if(isset($_REQUEST['update_sts'])){
	
	$id=$_POST['id'];
	$sub=$_POST['status'];
	echo $id;
	echo $sub;

	$result=$crud->execute("update `accepted_request` SET Status='$sub' where Id='$id'");

	if($result)
	{
		echo "Update successfully";
		//header("Location:cat_tb.php");
		echo '<script> window.location.href="accepted_order.php";</script>';
	}
}

?>