<?php

include_once('crud.php');
$crud=new Crud();

if(isset($_REQUEST['ser_add'])){
  
  $id=$_POST['ser_id'];
  $name=$_POST['ser_name'];

  $dup=mysqli_execute("select * from services where Service_Name='$name' OR Service_ID=$id");
  
  
  if(mysqli_num_rows($dup)>0)
  {
    echo "Service is already Exists...Please Enter New Service";

  }

  else
  {
    $que="insert into services values($id,'$name')";
    $result=$crud->execute($que);

        

    if($result)
    {
      echo "insert successfully";
      //header("Location:ser_tb.php");
      echo '<script> window.location.href="ser_tb.php";</script>';
    }
  }
  
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
    <title>HomeCare - Online Service System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">HomeCare</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="index.html">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="chart.html">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">
                Charts</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <!--  <i class="fa fa-fw fa-wrench"></i> -->
             <i class="fa fa-fw fa-table"></i> 
              <span class="nav-link-text">
                Tables</span>
            </a>

            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a href="reg_tb.php">Registration</a>
              </li>

              <li>
                <a href="ser_tb.php">Services</a>
              </li>

              <li>
                <a href="cat_tb.php">Service catagory</a>
              </li>

              <li>
                <a href="sub_tb.php">Service subcatagory</a>
              </li>

            </ul>

          </li>
      
        </ul>
        
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Table</li>
          <li class="breadcrumb-item active">Services</li>
        </ol>

        <!-- Icon Cards -->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">
                  New Feedback!
                </div>
              </div>
              <a href="feed.php" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
              <!--   -->
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">
                  New Orders!
                </div>
              </div>
              <a href="tb_cart.php" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
                  Accepted Orders
                </div>
              </div>
              <a href="accepted_order.php" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


         <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fa fa-fw fa-support"></i>
                </div>
                <div class="mr-5">
                  Declined Orders
                </div>
              </div>
              <a href="declined_order.php" class="card-footer text-white clearfix small z-1">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fa fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>


<!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Add Items 
          </div>

          <div class="card-header">
            <a href="ser_tb.php">View Table </a>
          </div>

          <div class="card-body">

            <form method="post" name="service" action="" align="left">

        <!--<input type="hidden" name="post" value="Send" />-->
                          
              <label for="name">Service Id:</label> <br>
              <input type="text" id="ser_id" name="ser_id" required/>
              <span class="error">* 
              </span>
              <br>
              <br>
              
              <div class="cleaner_h10"></div>
              <label for="email">Service Name:</label> <br>
              <input type="text" id="ser_name" name="ser_name" required/>
              <span class="error">*</span><br> 
              <br>   

              <input type="submit" class="submit_btn" name="ser_add" value="Add"/>
                    
              <input type="reset" class="submit_btn" name="reset" value="Reset" />

            </form>
          </div>

        </div>

      </div>

    </div>

  </body>

</html>

