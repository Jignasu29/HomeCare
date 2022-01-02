<?php 

include_once('crud.php');
$crud=new Crud();

if(isset($_REQUEST['edit_rg'])){
	$name=$crud->escape_string($_POST['name']);
	$id=$_POST['email'];
	$gen=$crud->escape_string($_POST['gender']);
	$add=$crud->escape_string($_POST['text']);
	$pin=$crud->escape_string($_POST['pincode']);
	$ct=$crud->escape_string($_POST['City']);
	
	$que=$crud->execute("update ragistration set Customer_Name='$name',Customer_Gender='$gen',Customer_Address='$add',Customer_Pincode='$pin',Customer_City='$ct' where Customer_EmailId='$id'");

	if($que)
	{
		echo "Update successfully";
		//header("Location:reg_tb.php");
		echo '<script> window.location.href="reg_tb.php";</script>';
	}
	else
	{
		echo myqli_error;
	}
}

?>