<?php
include_once('crud.php');

$crud=new Crud();

$id=$_REQUEST['id'];

$result=$crud->getData("select * from ragistration where Customer_EmailId='$id'");

foreach($result as $res)
{
	$name=$res["Customer_Name"];
	$mail=$res["Customer_EmailId"];
	//$con=$res["Customer_MobileNo"];
	//$pas=$res["Customer_Password"];
	$gen=$res["Customer_Gender"];
	$add=$res["Customer_Address"];
	$pin=$res["Customer_Pincode"];
	$ct=$res["Customer_City"];
	
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
          <li class="breadcrumb-item active">Registration</li>
        </ol>
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Registration Form
          </div>
          <div class="card-body">
      <form method="post" name="reg" action="rg_ediction.php" align="left">

      <!--<input type="hidden" name="post" value="Send" />-->
                        
            <label for="name">Name:</label> <br>
              <input type="text" id="name" name="name" value="<?php echo $name ?>" required/>
              <span class="error">* 
              </span>
            <br>
            <br>
            
            <div class="cleaner_h10"></div>
            <label for="email">Email:</label> <br>
              <input type="text" id="email" name="email" value="<?php echo $mail ?>" readonly/>
              <span class="error">* </span>
            <br> 
            <br>   

      <!--      <div class="cleaner_h10"></div>        
            <label for="author">Mobile no:</label> <br>
              <input type="text" id="cont" name="c_cont" value="<?php echo $con ?>" required />
              <span class="error">* </span>
            <br>
            <br>
                        
            <div class="cleaner_h10"></div>
            <label for="author">Password:</label>
            <br> 
            <input type="password" id="password" name="password" value="<?php echo $pas ?>" required />
            <span class="error">*</span>
            <br>
            <br>  -->

            <div class="cleaner_h10"></div>
                        
            <label for="gender">Gender: <?php #echo $gen?></label>
              <span class="error">*     
              </span>   <br>
              <input type="radio" name="gender" value="male"<?php if($gen=="male"){?> checked <?php } ?>  /> Male  
              <input type="radio" name="gender" value="female"<?php if($gen=="female"){?> checked <?php }?> />Female
          <!--    <input type="radio" name="gender" value="female" <?php #echo ($gen=="female")?'checked':''?>size="17"/>Female -->
            <br>
            <br>

            <div class="cleaner_h10"></div>
            <label for="text">Address:</label><br>
              <textarea id="text" name="text" rows="5" cols="50"  required><?php echo $add;?>
              </textarea>
              <span class="error">*   
              </span>
            <br>
            <br>        
            <div class="cleaner_h10"></div><br>

            <label for="author">Pincode no:</label>
            <br>
              <input type="text" id="pincode" name="pincode" value="<?php echo $pin ?>" />
              <span class="error">*    
              </span>
            <br>
            <br>

            <div class="cleaner_h10"></div>
            <label for="city">City:<?php #echo $ct?></label>
              <span class="error">*   
              </span>
            <select name="City">
                <option value="None">None</option> 
                <option value="Surat" <?php if($ct=="Surat"){ ?> selected <?php } ?> >Surat</option>    
                <option value="Ahemdabad" <?php if($ct=="Ahemdabad"){ ?> selected <?php } ?> >Ahemdabad</option>    
                <option value="Rajkot" <?php if($ct=="Rajkot"){ ?> selected <?php } ?> >Rajkot</option>
                <option value="Gandhinagar" <?php if($ct=="Gandhinagar"){ ?> selected <?php } ?> >Gandhinagar</option> 
                <option value="Vadodara" <?php if($ct=="Vadodara"){ ?> selected <?php } ?> >Vadodara</option> 
            </select>
            <br>
            <br> 

                  
            <div class="cleaner_h10"></div>
            <br>

            <input type="submit" class="submit_btn" name="edit_rg" id="submit" value="Edit"/>
                  
            <input type="reset" class="submit_btn" name="reset" id="reset" value="Return" />

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


