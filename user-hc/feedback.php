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
                        <form name="feedback" method="POST">
                            <fieldset>
                                <legend>Feedback Box </legend>
                                Email Id:<br>
                                <input type="text" name="eid" value="<?php echo $cn ?>" readonly>
                                <br>
                                <br>
                                <br>
                                Feedback:<br>
                                <textarea class="area" name="feed" rows="0" cols="0" required></textarea>
                                <br>
                                <br>
                                <br>
                                <input type="button" class="button" name="send" value="send">
                            </fieldset>
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
