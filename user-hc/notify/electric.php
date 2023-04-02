

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
	
	<title>
		Home Care-Online Repair Service
	</title>
	
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
                    <li><a href="electric.php" target="content"><b> Electric </b></a></li>
                    <li><a href="electronic.php" target="content"><b> Electronic </b></a></li>
                    <li><a href="furniture.php" target="content"><b> Furniture </b></a></li>
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

				<h2>
					Electric Items Services ...
				</h2>
				<form method="post" name="electric_subcat" action="electric_subcat.php " align="left">
					<font size="4">
				    <div class="services_section horizon_divider">
				    	<div class="ss_left">
				    		<input type="radio" name="elec" value="Fan"  /> Fan   
				    	</div>

				    	<div class="cleaner"></div>
				    </div>

				    <div class="services_section horizon_divider">
				    	<div class="ss_left">
				    		<input type="radio" name="elec" value="Light"  /> Light   
				    	</div>
				    	
				    	<div class="cleaner"></div>
				    </div>

				    <div class="services_section horizon_divider">
				    	<div class="ss_left">
				    		<input type="radio" name="elec" value="MCB & Fuse"  /> MCB & Fuse   
				    		
				    	</div>
				    	<div class="cleaner"></div>
				    </div>

				    <div class="services_section horizon_divider">
				    	<div class="ss_left">
				    		<input type="radio" name="elec" value="Geyser"  /> Geyser   
				    		
				    	</div>
				    	
				    	<div class="cleaner"></div>
				    </div>

				    <div class="services_section horizon_divider">
				    	<div class="ss_left">
				    		<input type="radio" name="elec" value="Switches & Sockets"  /> Switches & Sockets   
				    		
				    	</div>
				    	
				    	<div class="cleaner"></div>
				    </div>


				    	<input type="submit" class="button" name="next" id="submit" value="Next" />	
				    	<br />
                    <br />
                     <div class="cleaner_20">
				    	<input type="submit" class="button" name="return" id="return" value="Return" onclick="back()" /> 
				    	
				    </div>
                    </font>
            	</form>



			</div>
		
			<div class="sidebar">
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
	</div>

	<div id="templatemo_footer_wrapper">

        <div id="templatemo_footer">
    
        Copyright © 2048 <a href="#">Home Care</a>
    
        </div> 
        <!-- end of templatemo_footer -->
    </div>
	

</div>
<!-- end of wrapper -->	


</body>
</html>


<?php

	if(isset($_POST['next']))
		{
			echo '<script> window.location.href="electronics_subcat.php";</script>';
		}
?>