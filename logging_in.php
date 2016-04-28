<?php
include("connect.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Palm Valley Resort Reservation</title>

 <link href="css/bootstrap.css" rel="stylesheet">
   <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

</head>

<body>




 <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
                 
        	</div>
            
  <!--      <div class="logout">
 <form name="logout_form" method="post" action="logged.php">
 <input type="submit" name="Logout" value="Logout" id="Logout" class="btn btn-default" style="border-radius:10px;width:70px;height:30px;background-color:#464545;color:#ffffff;border-color:#464545">
<br><br><br>
  </form>-->
      
<ul class="nav navbar-nav">
	<li><img src="icons/logo.png" width="240px" height="50px"></li>
	<li><a href="index.php">Home</a></li>
    <li><a href="promo.php">Promo & Fees</a></li>	
    <li><a href="cottages.php">Cottages</a></li>					
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="careers.php">Careers</a></li>
    <li><a href="log_customer.php">Customer Reservation</a></li>
     <li class="active"><a href="login.php"><font color="white">Staff Reservation</font></a></li>
  	
</ul>	
    


  </nav>

<br>
<br><br>
      
    		

<!-- <input type="submit" name="log_customer" id="log_customer" value="Login as Customer" class="btn btn-default" style="border-radius:4px;width:300px;height:50px;font-size:16px">
  <input type="submit" name="log_employee" id="log_employee" value="Login as Employee" class="btn btn-default" style="border-radius:4px;width:300px;height:50px;font-size:16px">
<br><br><br>-->



 <center>


<img src="icons/employee.png" height="200px" width="200px" />
<br><br>
<a href="#"><input type="submit"  value="Login" class="btn btn-default active" style="border-radius:4px;width:148px;height:50px;font-size:22px"></a>

<a href="sign.php"> <input type="submit"  value="Sign Up" class="btn btn-default" style="border-radius:4px;width:148px;height:50px;font-size:22px"></a>
  <form name="login_form" method="post" action"">
   <?php
         
session_start();
if(isset($_POST['uname'])) { 

			 
             $username = $_POST['uname'];
             $password = $_POST['pword'];
		
			 
			 
			$username = stripslashes($username);
			$password = stripslashes($password);
			
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
		
			 
			 $_SESSION['uname']=$username;	
             $sql = "SELECT * FROM registered_customer.employee WHERE uname ='".$username."' AND pword = '".$password."'";
             $res = mysql_query($sql);
             if (mysql_num_rows($res) == 1){
   				
				header("location: login.php");
				}
				
				else{
					
          		echo "<center><font color='red'><br>Wrong Username or Password</font><br></center>";
          		
				}
				
             }
			 
           
		
			 
			 
			
		
		
			
	?>


<h3>Please Log in ...</h3>
Type your username and password<br><br>
<input name="uname" id="uname" class="form-control" style="border-radius:4px;height:50px;width:300px" placeholder="Username"
maxlength="20"><br><br>
<input name="pword" id="pword" type="password" class="form-control" style="border-radius:4px;height:50px;width:213px" placeholder="Password" maxlength="8">



 <input type="submit" name="Login" value="Go" id="Login" class="btn" style="border-radius:4px;width:80px;height:50px;font-size:16px">
<br><br><br><br>
</div>
 </center>
</form>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap.js"></script>

     
 
  
 
   </center><br><br><br>
 
 </div>

  
</body>
</html>
