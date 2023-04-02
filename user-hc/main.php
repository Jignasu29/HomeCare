<?php
session_start();
require_once 'connection.php';



if(isset($_POST['login']))
{
	$email=$_POST['emailid'];
	$pwd=$_POST['loginpwd'];
	

	$qu="select * from ragistration where Customer_EmailId='$email' and Customer_Password='$pwd'";

	$res=mysqli_query($con,$qu) or die(mysqli_error($con));
	$r=mysqli_fetch_row($res);

	if($email==$r[1] && $pwd==$r[3])
	{
		$_SESSION['cemail']=$r[1];
		$_SESSION['cpwd']=$r[3];
		header('location:home.html');
	}
	else{
		echo '<script type="text/javascript">alert("Opps!! Login Failed");
				  </script>';
	}
	/*else
	{
		if($e != $email)
		{
			echo '<script type="text/javascript">alert("opps!! email is wrong");
				  </script>';
			//header("location:main.php");
		}
		elseif($p != $pwd)
		{
			echo '<script type="text/javascript">alert("opps!! wrong password");
				  </script>';
			//header("location:main.php");
		}
	}*/

	
	
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />

	<title>Home Care-Online Repair Service</title>
	<link rel="stylesheet" type="text/css" href="style2.css">

	<style>
    .error {color: #FF0000;}
  </style>
</head>
<body>
	
	<div class="login-box">
		
		<h1>Login Here</h1>

		<form method="post" name="login" action="" align="left">
			
                  	
         	<label for="email">Email Id:</label> <br>
    		<div class="cleaner_h10"></div>
						
				<input type="email" id="email" name="emailid" placeholder="Enter Email Id" required />
				<span class="error">* </span>
                      	
			<div class="cleaner_h10"></div>
			<br>
			<br>

			<label for="author">Password:</label> <br>
			<div class="cleaner_h10"></div>
						
				<input type="password" name="loginpwd" placeholder="Enter Password" required/>
				<span class="error">* </span>

			<div class="cleaner_h10"></div>
			<div class="cleaner_h10"></div>

			<input type="submit" name="login" id="login" value="Log In" />

			<div class="cleaner_h10"></div>
			<br>
			<br>
						
			<p>Don't have an account?<br>
							
				<div class="cleaner_h10"></div>
				<a href="registration.php">Registration</a>
			</p>
		</form>

	</div>
</body>
</html>





