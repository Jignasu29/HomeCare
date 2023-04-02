<?php

include_once('crud.php');
$crud=new Crud();

if(isset($_REQUEST['Edit'])){
	
	$id=$_POST['id'];
	$name=$_POST['ser_name'];
	
	$result=$crud->execute("update `services` SET Service_Name='$name' where Service_ID=$id");

	if($result)
	{
		echo "Update successfully";
		//header("Location:sub_tb.php");
		echo '<script> window.location.href="ser_tb.php";</script>';
	}
}

?>

