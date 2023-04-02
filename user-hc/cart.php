<?php

session_start();

require_once 'connection.php';
//echo " cart page ";

	$cn=$_SESSION["cemail"];
	$idC=null;
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
    <br>

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

            				<li><a href="feedback.php" target="content">Feedback Us</a></li>

            				<li><a href="logout.php" target="content">Log Out</a></li>
        				</ul>
        			</div>
    			</div>
    
				<div id="templatemo_main">
    
    				<div id="templatemo_content">

<?php

//if (isset($_POST["furni"])) 
//{
	# code...

		$qui="select Ser_SubCatagoryName,Quantity,Price from cart where Customer_EmailId='$cn'";
		//echo $qui;
		$res=mysqli_query($con,$qui) or die(mysqli_error($con));
?>

<form name="cart_page" method="POST">
					<table  border="5" align="center" width="100%">
					<tr> 
						<th><b>Service Name</b></th> 
						<th><b>Quantity</b></th> 
						<th><b>Price</b></th>
						<th><b>Delete</b></th>
				
					</tr>
					<?php

					while($r = mysqli_fetch_array($res))
					{
						echo "<tr>";
						echo "<td>".$r["Ser_SubCatagoryName"]."</td>";
						echo "<td>".$r["Quantity"]."</td>";
						echo "<td>".$r["Price"]."</td>";
					?>
						<td><a href='delete.php?name=<?php echo $r["Ser_SubCatagoryName"];?>'>Delete</td>;

					<?php
						echo "</tr>";
					}
					?>

						</table>
					
						<br>
						<br>

					<?php
						if($res==null && $res==0)
						{
							echo '<script>alert("cart is empty");</script>';
						}
					?>

					

					<br />
                	<br />
                    	<div class="cleaner_20">
                     		<input type="submit" class="button" name="bill" value="Display Bill"> </a><br>
                    	</div>
				
					</form>

						<div class="sticky-container">
        					<ul class="sticky">
            					<li>
            						<img src="images/cart.jpg" width="50px" height="50px">
            						<a href="cart.php">Cart</a>
            					</li>
        					</ul>
        				</div>
					</div>
					
				</div>

				<div class="cleaner"></div>	
				

				<br>
				<br>

				<div id="templatemo_footer_wrapper">

        			<div id="templatemo_footer">
    
        				Copyright © 2048 <a href="#">Home Care</a>
    				</div> 
       				<!-- end of templatemo_footer -->
    			</div>	
			</div>
		</body>
		</html>

<?php

if(isset($_POST['bill']))
{
    echo '<script> window.location.href="display.php"; </script>';
}

?>
