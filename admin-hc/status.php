<?php

include_once('crud.php');

$crud=new Crud();

$id=$crud->escape_string($_GET['sid']);

$result=$crud->getData("select * from accepted_request where Id='$id'");

foreach($result as $res)
{
  $Id=$res["Id"];
  $Sid=$res["Subcat_id"];
  $Ser=$res["Subcat_name"];
  $qty=$res["Qty"];
  $rs=$res["Price"];
  $eid=$res["Mail"];
  $st=$result["Status"];
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

    <style>
    .error {color: #FF0000;}
  </style>

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
          <li class="breadcrumb-item active">Status</li>
        </ol>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Service Subcatagory Form
          </div>
          <div class="card-body">

<form method="post" name="sub_edit" action="sts.php" align="left">

      <!--<input type="hidden" name="post" value="Send" />-->
                        
            <label for="id">Id:</label> <br>
            <input type="text" id="id" name="id" value="<?php echo $Id ?>" readonly/>
            <br>
            <br>

            <label for="sid">Subcatagory Id:</label> <br>
            <input type="text" id="sid" name="sid" value="<?php echo $Sid ?>" readonly/>
            <br>
            <br>
            
            <div class="cleaner_h10"></div>
            <label for="sname">Subcatagory Name:</label> <br>
            <input type="text" id="sname" name="name" value="<?php echo $Ser ?>" readonly/>
            <br> 
            <br>   

            <div class="cleaner_h10"></div>
            <label for="qty">Quantity:</label> <br>
            <input type="text" id="qty" name="cat" value="<?php echo $qty ?>" readonly/>
            <br>   
            <br> 

            <div class="cleaner_h10"></div>
            <label for="pr">Price:</label> <br>
            <input type="text" id="pr" name="pr" value="<?php echo $rs ?>" readonly/> 
            <br> 
            <br>  

            <div class="cleaner_h10"></div>
            <label for="eid">Customer Email:</label> <br>
            <input type="text" id="email" name="eid" value="<?php echo $eid ?>" readonly/> 
            <br> 
            <br> 

            <div class="cleaner_h10"></div>
            <label for="sts">Status:</label> <br>
            <select name="status">
              <option value="Pending">Pending</option>
              <option value="Completed">Completed</option>
            </select>

            <br>
            <br> 


            <input type="submit" class="submit_btn" name="update_sts" id="submit" value="Edit"/>
                  
            <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />

      </form>



          </div>
      	</div>
  	  </div>
	</div>

	<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright &copy; HomeCare 2019</small>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="LogOut.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
