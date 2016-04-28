
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
     <li><a href="logging_in.php"><font color="white">Already a member? Login</font></a></li>
   <li class="active"> <a href = "sign.php"><font color="white">Not a member? Sign Up</font></a>	</li>		
</ul>	
    


</nav>


<br><br><br><br>
<h3>Accounts</h3>


<table class="table">
<thead>

</thead>
<tbody>
<tr>
<?php



include("connect.php");

$result = mysql_query("SELECT * FROM registered_customer.accounts") or die(mysql_error());

echo '<th class="alert-info">Id Number</th><th class="alert-info">First Name</th><th class="alert-info">Middle Name</th><th class="alert-info">Surname</th><th class="alert-info">Position</th>
<th class="alert-info">Username</th><th class="alert-info">Password</th>';

while ($row = mysql_fetch_array($result)) {
  
echo '<tr><td>';

echo $row['id_no'];

echo '<td>';

echo $row['fname'];

echo '<td>';

echo $row['mname'];

echo '<td>';

echo $row['sname'];


echo '<td>';

echo $row['position'];

echo '<td>';

echo $row['username'];

echo '<td>';

echo $row['password'];


}


?>
</tr>
</tbody>
</table>
</div>
</body>
</html>