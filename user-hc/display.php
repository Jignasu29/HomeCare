<?php
session_start();

require_once 'connection.php';

$eid=$_SESSION["cemail"];

$qui="select * from ragistration where Customer_EmailId='$eid'";
		//echo $qui;
$res=mysqli_query($con,$qui) or die(mysqli_error($con));

while($r=mysqli_fetch_array($res))
{

?>

<!DOCTYPE html>
		<html>
		<head>
			<title>Home Care-Online Repair Service</title>
			<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
		</head>

		<body>
			<div id="templatemo_wrapper">
				<div id="templatemo_header_wrapper">
        			<div id="templatemo_header">
            			<div id="site_title">
            				<h1>HomeCare </h1>
            			</div>


             		<div id="templatemo_banner">
            			<h2>Get Experiance <span>with our best services</span></h2>
            		</div>
        			</div>
    			</div>

				<div id="templatemo_middle">
        			<div id="templatemo_menu">
        			<ul>
            			<li><a href="home.html" target="content"><b>Home</b></a></li>
        
            			<li><a href="services.html" target="content"><b> Services</b> </a>
            				<ul>
                    			<li><a href="electric_subcat.php" target="content"><b> Electric </b></a></li>
                    			<li><a href="electronics_subcat.php" target="content"><b> Electronic </b></a></li>
                   				<li><a href="furniture_subcat.php" target="content"><b> Furniture </b></a></li>
                			</ul>
            			</li>
        
            			<li><a href="complaint.html" target="content"><b> Complaint </b></a></li>
            
            			<li><a href="contact.html" target="content"><b> Contact Us </b></a></li>

            			<li><a href="feedback.html" target="content"><b>Feedback Us</b></a></li>

            			<li><a href="logout.php" target="content"><b>Log Out</b></a></li>
        			</ul>
        			</div>
    			</div>
    
				<div id="templatemo_main">
    
    				<div id="templatemo_content">
    					<form name="bill" method="post">
    						<fieldset>
    						<legend><b>Custoner Details</b></legend>
							<label><b>Customer name</b></label>
							<input type="text" name="c_name" value="<?php echo $r["Customer_Name"]?>"><br><br>
							<label><b>Customer email</b></label>
							<input type="text" name="c_mo" value="<?php echo $r["Customer_EmailId"]?>"><br><br> 
						</fieldset>
    					
							<?php
							}
							?>

						<br>
							<?php

							$qu="select Ser_SubCatagoryName,Quantity,Price from cart where Customer_EmailId='$eid'";
								//echo $qui;
							$res1=mysqli_query($con,$qu) or die(mysqli_error($con));

							?>
						<fieldset>
							<legend>Service</legend>
							<table  border="5" align="center" width="100%">
								<tr> 
									<th><b>Service Name</b></th>  
									<th><b>Price</b></th>
									<th><b>Quantity</b></th>
								</tr>

							<?php

							while($r1 = mysqli_fetch_array($res1))
							{
								echo "<tr>";
								echo "<td>".$r1["Ser_SubCatagoryName"]."</td>";
								echo "<td>".$r1["Price"]."</td>";
								echo "<td>".$r1["Quantity"]."</td>";
								echo "</tr>";

							$total=$total+$r1["Price"];
							$quty=$quty+$r1["Quantity"];
							}
							echo "<tr>";
							echo "<td><b> Total amount:</b></td>";
							echo "<td>".$total."</td>";
							echo "<td>".$quty."</td>";
							echo "</tr>";

							?>
							</table>
						</fieldset>

						<input type="submit" class="button" name="service_request" value="Send Service Request" />

						<input type="submit" class="button" name="return" value="Return" />

						</form>

	    				</div>
					</div>				

				<br>
				<br>

				<!--<div id="templatemo_footer_wrapper">

        			<div id="templatemo_footer">
    
        				Copyright © 2048 <a href="#">Home Care</a>
    				</div> 
       				 end of templatemo_footer--
    			</div>	
			</div> -->
		</body>
	</html>

<?php

if(isset($_POST['service_request']))
{

	$amount=$_POST['$total'];
	$eid=$_SESSION['cemail'];

	$insert="insert into bill (bill_amount,Customer_EmailId) VAlUES('$amount','$eid')";

	$res=mysqli_query($con,$insert) or die(mysqli_error($con));

if($res)
{
	echo "<script>alert('Request sended sucessfully and payment on delivary');</script>";
    echo '<script> window.location.href="home.html"; </script>';
}
else
{
	echo "<script>alert('unsuccesful service request');</script>";
    echo '<script> window.location.href="display.html"; </script>';
}
	
}

if(isset($_POST['return']))
{
	echo '<script> window.location.href="cart.php"; </script>';
}
?>