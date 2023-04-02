<!DOCTYPE HTML>  
<html>
<head>
  <style>
    .error {color: #FF0000;}
  </style>
  
  <meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
    <title>Home Care-Online Repair Service</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>  

<?php
// define variables and set to empty values

require_once 'connection.php';

if(isset($_REQUEST["submit"]))
{
   $nameErr = $emailErr = $genderErr = $conErr = $pinErr = $ctErr = $addErr = $passwordErr="";
  //$Err=array();
 
  #name validation

  if(empty($_POST['name']))
  {
    $nameErr="name is required";
  }
  else
  {

    if(filter_var($_POST['name'],FILTER_VALIDATE_INT))
    {
       
      $nameErr="Enter only alphabates";
    }
    else
    {

      $c_name=$_POST['name'];
    }
  }

#email validation

  if(empty($_POST['email']))
  {
    $emailErr="email is required";
  }
  else
  {

    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
      $c_email=$_POST['email'];
   
    }
    else
    {
    
      $emailErr="please enter valid formate";
    }
  }


#contact validation
echo $_POST['c_cont'];

  if(empty($_POST['c_cont']))
  {
    $conErr="contact is required";
  }
  else
  {

    if(!filter_var($_POST['c_cont'],FILTER_VALIDATE_INT))
    {
      $conErr="please enter only number";

    }
    else
    {
      $cont=$_POST['c_cont'];
    }
  }


#pincode validation

  if(empty($_POST['pincode']))
  {
    $pinErr="pincode is required";
  }
  else
  {

    if(!filter_var($_POST['pincode'],FILTER_VALIDATE_INT))
    {
     
      $pinErr="please enter only number";
    }
    else
    {
      $pin=$_POST['pincode'];
    }
  }

#Gender validation

  if(empty($_POST['gender']))
  {
    $genderErr="gender is required";
  }
  else
  {
    $gen=$_POST['gender'];
  }

#password validation

  if(empty($_POST['password']))
  {
    $passwordErr="password is required";
  }
  else
  {
    $pwd=$_POST['password'];
  }

#city validation

  if(empty($_POST['City']))
  {
    $cErr="city is required";
  }
  else
  {
    $ct=$_POST['City'];
  }

#state validation

/*  if(empty($_POST['state']))
  {
    $sErr="state is required";
  }
  else
  {
    $st=$_POST['state'];
  }
  */

#address validation

  if(empty($_POST['text']))
  {
    $addErr="address is required";
  }
  else
  {
    $add=$_POST['text'];
  }


  $q="insert into ragistration values ('$c_name','$c_email','$cont','$pwd','$gen','$add','$pin','$ct')";

  $res=mysqli_query($con,$q) or die(mysqli_error($con));

  echo '<script>window.location.href="main.php";</script>';


}




   


?>


<div class="reg-box">
    <h2> Registartion</h2>

    <form method="post" name="login" action="" align="left">

      <!--<input type="hidden" name="post" value="Send" />-->
                        
            <label for="name">Name:</label> <br>
            <input type="text" id="name" name="name"  required />
            <span class="error">* 
              <?php echo $nameErr;?>
            </span>
            
            <div class="cleaner_h10"></div>
                        
                  <label for="email">Email:</label> <br>
            <input type="text" id="email" name="email"  required />
            <span class="error">* <?php echo $emailErr;?></span><br>
            <div class="cleaner_h10"></div>            
                        
            <label for="author">Mobile no:</label> <br>
            <input type="text" id="cont" name="c_cont"  required />
            <span class="error">* <?php echo $conErr;?></span>
            <span class="error"><?php echo $cont;?></span>
            <br>
                        
            <div class="cleaner_h10"></div>

            <label for="author">Password:</label>
            <br> 
            <input type="password" id="password" name="password" required /><span class="error">*</span>
            <br>
            <div class="cleaner_h10"></div>
                        
            <label for="gender">Gender:</label><span class="error">* 
              <?php echo $genderErr;?>    
            </span>   <br>
            <input type="radio" name="gender" value="male"/> Male  
            <input type="radio" name="gender" value="female"/>Female 
            
            <br>

            <label for="text">Address:</label><br>
            <textarea id="text" name="text" rows="0" cols="0" required>
            </textarea>
            <span class="error">* <?php echo $addErr;?>    
            </span>
                        
            <div class="cleaner_h10"></div><br>

            <label for="author">Pincode no:</label>
            <br>
            <input type="text" id="pincode" name="pincode" />
            <span class="error">* <?php echo $pinErr;?>   
            </span>
                        
            <div class="cleaner_h10"></div>
                        
            <label for="city">City:</label>
              <span class="error">* <?php echo $ctErr;?>   
              </span>
            <select name="City">
                <option value="None">None</option> 
                <option value="Surat">Surat</option>    
                <option value="Ahemdabad">Ahemdabad</option>    
                <option value="Rajkot">Rajkot</option>
                <option value="Gandhinagar">Gandhinagar</option> 
                <option value="Vadodara">Vadodara</option> 
            </select> 

          <!--  <label for="state">State:</label>
              <span class="error">* <?php echo $sErr;?>   
              </span>
            <select name="state">
                <option value="None">None</option> 
                <option value="Gujarat">Gujarat</option>    
            </select> -->

                  
                  <div class="cleaner_h10"></div>
                  <br>

                  <input type="submit" class="submit_btn" name="submit" id="submit" value="submit"/>
                  
                  <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />

      </form>
    
</div>
</body>
</html>