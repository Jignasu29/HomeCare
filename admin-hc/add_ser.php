<?php

include_once('crud.php');
$crud=new Crud();

if(isset($_post['ser_add'])){
	
	$id=$_post['ser_id'];
	$name=$_post['ser_name'];

	$que="insert into services values($id,'$name')";
	$result=$crud->execute($que);

	if($result)
	{
		echo "insert successfully";
		header("Location:ser_tb.php");
	}
}

?>