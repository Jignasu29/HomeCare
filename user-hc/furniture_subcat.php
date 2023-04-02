<?php  

session_start();

require_once 'connection.php';

if(isset($_POST['return']))
{
	echo '<script> window.location.href="services.html";</script>';
}

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

            				<li><a href="feedback.php" target="content"><b>Feedback Us</b></a></li>

            				<li><a href="logout.php" target="content"><b>Log Out</b></a></li>
        				</ul>
        			</div>
    			</div>
    
				<div id="templatemo_main">
    
    				<div id="templatemo_content">

<?php

//if (isset($_POST["furni"])) 
//{
	# code...

	$ser=array("Drill & Hang","Lock","Furniture Assembly","Door","Fittings","Drawer");
	for($x=0;$x<count($ser);$x++)
	{

		$id="select Ser_catagoryID from service_catagory where Ser_catagoryName='$ser[$x]'";
		//echo $id."<br/>";
		$res1=mysqli_query($con,$id) or die(mysqli_error($con));
	
			while($r1 = mysqli_fetch_array($res1))
			{
				$idV=$r1["Ser_catagoryID"];
			}

		$qui="select * from service_subcatagory where Ser_CatagoryId='$idV'";
		//echo $qui;
		$res=mysqli_query($con,$qui) or die(mysqli_error($con));
?>

				<form name="item list" method="POST">
					<h2><?php echo $ser[$x];?></h2>
					<table  border="5" align="center" width="100%">
					<tr> 
						<td><b>Service Name</b></td> 
						<td><b>Price</b></td> 
						<td><b>Quantity</b></td>
						<td></td>
				
					</tr>
					<?php

					while($r = mysqli_fetch_array($res))
					{
						echo "<tr>";
						echo "<td>".$r["Ser_SubCatgoryName"]."</td>";
						echo "<td>".$r['Price']."</td>";
					?>
						
						<td><input type="text" name="qty" value="1" readonly></td>
					<td><a href='addtocart1.php?id2=<?php echo $r["Ser_SubCatagoryId"]; ?>&name2=<?php echo $r["Ser_SubCatgoryName"];?>&price2=<?php echo $r["Price"];?>' >Add to cart</td>;


					<?php
						echo "</tr>";
					}
					?>

						</table>
					</form>
						<br>
						<br>

						<?php
							}
						?>

					</div>
				
					
						<div class="sticky-container">
        					<ul class="sticky">
            					<li>
            						<img src="images/cart.jpg" width="50px" height="50px">
            						<a href="cart.php">Cart</a>
            					</li>
        					</ul>
        				</div>
						
					
				</div>

				<div class="cleaner"></div>	
				<br />
                <br />
                 

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

/*
if (isset($_POST["cart"])) 
{
	
	$item_id = $_POST["hidden_id"];
	$item_name =$_POST["hidden_name"];
	$item_qty =$_POST["hidden_qty"];
	$item_price = $_POST["hidden_price"];
	$eid=$_SESSION["cemail"];

	$insert="insert into cart (Ser_SubCatagoryId,Ser_SubCatagoryName,Quantity,Price,Customer_EmailId) VAlUES('$item_id','$item_name','$item_qty','$item_price','$eid')";

	$res=mysqli_query($con,$insert) or die(mysqli_error($con));
    
  if($res)
  {
    echo '<script>alert("item added succesfully");</script>';
    echo '<script> window.location.href="furniture_subcat.php";</script>';
  }
  else
  {
    echo '<script>alert("not inserted");</script>';
    echo '<script> window.location.href="furniture_subcat.php";</script>';
  }

}
*/


?>