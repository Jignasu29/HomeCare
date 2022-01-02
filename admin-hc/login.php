<?php
session_start();
include_once('l_conn.php');



if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $pwd=$_POST['password'];
  

  $qu="select * from admin where EmailId='$email' and Password='$pwd'";

  $res=mysqli_query($con,$qu) or die(mysqli_error($con));
  $r=mysqli_fetch_row($res);

  if($email==$r[0] && $pwd==$r[1])
  {
    $_SESSION['ad-email']=$r[0];
    $_SESSION['ad-pwd']=$r[1];
    header('location:index.html');
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
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">

      <div class="card card-login mx-auto mt-5">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
          <form name="admin-login" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="form-check">
              <!--  <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Remember Password
                </label>  -->
              </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Login" />
          </form>
          <div class="text-center">
            <!--<a class="d-block small mt-3" href="register.html">Register an Account</a> -->
      <!--      <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
