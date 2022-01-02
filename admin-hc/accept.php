<?php

include_once('crud.php');
$crud=new Crud();

//echo "accept page";

$id=$crud->escape_string($_GET['cid']);
$eid=$crud->escape_string($_GET['eid']);

$res=$crud->getData("select * from cart where Id=$id");

//$result=$crud->getData("select * from ragistration where Customer_EmailId='$eid'");

//$cont='91'.$result["Customer_MobileNo"];

foreach ($res as $r) {
	# code...
	$subid=$r["Ser_SubCatagoryId"];
	$subnm=$r["Ser_SubCatagoryName"];
	$qty=$r["Quantity"];
	$pr=$r["Price"];
	$ed=$r["Customer_EmailId"];
	$st="Pending";
}




	$que="insert into accepted_request values('','$subid','$subnm','$qty','$pr','$ed','$st')";
  	$result=$crud->execute($que);

  	if($result)
  {
    //echo "accept successfully";
    //echo "<br />";
    //header("Location:ser_tb.php");
    $del=$crud->execute("delete from cart where Id=$id");
    echo '<script> window.location.href="tb_cart.php";</script>';

  }
//}

?>