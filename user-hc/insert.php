<?php

require_once 'connection.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{

//$nameErr = $emailErr = $genderErr = $conErr = "";
  $n=trim($_POST['name']);
	$e=trim($_POST['email']);
	$c=trim($_POST['contact']);
	$p=trim($_POST['password']);
	$g=trim($_POST['gender']);
	$t=trim($_POST['text']);
	$pn=trim($_POST['pincode']);
	$ct=trim($_POST['City']);
	$s=trim($_POST['State']);

   /*if (!preg_match("/^[a-zA-Z ]*$/",$n)) 
    {
      $nameErr="Enter alphabate only";
      //echo $nameErr;
    } 

    if (!filter_var($e,FILTER_VALIDATE_EMAIL)) {
      $emailErr="Enter valide email id";
      //echo $emailErr;
    }
 
    if (!is_numeric($c)) 
    {
       $conErr=" Invalid contact number";
       //echo $conErr;
    }

    if ($g=="") 
    {
       $genderErr = "Gender is required";
       echo $genderErr;
    }
    
    if (!is_numeric($pn)) 
    {
       $pinErr=" Invalid pincode ";
       //echo $conErr;
    }

*/

	$q="insert into ragistration values('$n','$e','$c','$p','$g','$t','$pn','$ct','$s')";

    $res=mysqli_query($con,$q) or die(mysqli_error($con));
    
  if($res)
  {
    echo "<br>".'inserted succesfully';
  }
  else
  {
    echo "<br>".'not inserted';
    echo '<script> window.location.href="registration.php";</script>';
  }

  //echo '<script> window.location.href="home.html";</script>';
   
}
?>