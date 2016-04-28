<?php
session_start();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Palm Valley Resort Reservation</title>

 <link href="bootstrap.css" rel="stylesheet">
   <link href="sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

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
	<li><img src="logo.png" width="240px" height="50px"></li>
	<li><a href="index.php">Home</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="policies.php">Resort Policies</a></li>
    <li><a href="promo.php">Promo & Fees</a></li>	
    <li><a href="cottages.php">Cottages</a></li>					
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="careers.php">Careers</a></li>
     <li class="active"><a href="logging_in.php"><font color="white">Already a member? Login</font></a></li>
   <li> <a href = "sign.php"><font color="white">Not a member? Sign Up</font></a>	</li>		
</ul>	
    


  </nav>

<br>
<br><br><br>

<!-- <input type="submit" name="log_customer" id="log_customer" value="Login as Customer" class="btn btn-default" style="border-radius:4px;width:300px;height:50px;font-size:16px">
  <input type="submit" name="log_employee" id="log_employee" value="Login as Employee" class="btn btn-default" style="border-radius:4px;width:300px;height:50px;font-size:16px">
<br><br><br>-->
  <form name="login_form" method="post" action"">
   <?php
             include("connect.php");
ob_start();
if(isset($_POST['username'])) { 

        	/* $username = "";
             $password = "";*/
			 
             $username = $_POST['username'];
             $password = $_POST['password'];
			 $position = $_POST['position'];
			 
			 
			$username = stripslashes($username);
			$password = stripslashes($password);
			$position = stripslashes($position);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			$position = mysql_real_escape_string($position);
			 
			 
             $sql = "SELECT * FROM registered_customer.accounts WHERE username ='".$username."' AND password = '".$password."' AND position = '".$position."'";
             $res = mysql_query($sql);
             if (mysql_num_rows($res) == 1){
   				
				/*if(isset($_POST["position"])){
			
				$query = mysql_query("SELECT * FROM registered_customer.accounts WHERE position = '".$position_reg."'");*/
				$position_reg = $_GET['position'];
			if ($position == "Customer"){
				$row = mysql_fetch_array($query);
				header("location: logged_client.php");
				}
				
				else{
				
          		header("location: logged.php");
				}
				
             }
			 
             else{
				
          		echo "Wrong Username or Password";
			
             }
		
			 
			 
			
		
		
			 ob_end_flush();
}
	?>


<h3>Please Log in ...</h3><br>
Type your username and password<br><br>
<input name="username" id="username" class="form-control" style="border-radius:4px;height:50px;width:300px" placeholder="Username"
maxlength="20"><br><br>
<input name="password" id="password" type="password" class="form-control" style="border-radius:4px;height:50px;width:300px" placeholder="Password" maxlength="8"><br><br>

<select name="position" id="position" style="width:300px;height:50px;border-radius:4px" class="form-control" >
<option value="Customer" id="Customer">Customer</option>
<option value="Employee" id="Employee">Employee</option>
</select>

 <input type="submit" name="Login" value="Login" id="Login" class="btn" style="border-radius:4px;width:300px;height:50px;font-size:16px">
<br><br><br>
</div>
 
</form>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap.js"></script>

       
       
    		 <center>
   <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
  <br><font color="white">Copyright <sup>®</sup> 2015 PALM VALLEY RESORT.All rights reserved.</font> 
  <a href="fb.com" title="Like us on Facebook"><img src="fb.png" height="30px" width="30px"></a>
  <a href="twitter.com"  title="Follow us on Tweeter"><img src="twitter.png" height="30px" width="30px"></a>
  <a href="instagram.com" title="Post on Instagram"><img src="instagram.png" height="30px" width="30px"></a>
    <br><br>
   </nav> 
  
 
   </center><br><br><br><br><br><br>
 
 </div>

  
  
   <table>
                <thead>
                  <tr>
                  </tr>
                </thead>
                <tbody>
<?php


/*
include("connect.php");

$result = mysql_query("SELECT * FROM datab.cs") or die(mysql_error());

echo '<th>Name</th><th>Course</th><th>Year</th><th>Section</th>';

while ($row = mysql_fetch_array($result)) {
  
echo '<tr><td>';

echo $row['user_name'];

echo '<td>';

echo $row['course'];

echo '<td>';

echo $row['year'];

echo '<td>';

echo $row['section'];

}
*/

?>
                </tbody>
              </table>
</body>
</html>
