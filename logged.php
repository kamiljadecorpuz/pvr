

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
            

<ul class="nav navbar-nav">
	<li><img src="logo.png" width="240px" height="50px"></li>
	<li class="active"><a href="index.php">Home</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="policies.php">Resort Policies</a></li>
    <li><a href="promo.php">Promo & Fees</a></li>	
    <li><a href="cottages.php">Cottages</a></li>					
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="careers.php">Careers</a></li>
    <li><a href="#"><font color="white">Edit Account</font></a></li>
    <li><input name="search" class="form-control" style="border-radius:4px;height:25px;width:150px" placeholder="Search">
<img src="fb.png" width="25px" height="25px"></li>
   	
</ul>	


  </nav>

<br>
       <div class="selections">
 
  <form name="selections_form" method="post" action="login.php">
  <br><br>
 
  <h2>WELCOME !</h2>
  
  <hr>
  <center>
  <a href="login.php"><button type="submit" class="btn btn-default" style="border-radius:10px;width:180px;height:200px"><img src="create-new.png"><br>Reservation</button></a>
<button type="submit" class="btn btn-default" style="border-radius:10px;width:180px;height:200px"><img src="view-list.png"><br>View Reservation List</button>
<button type="submit" class="btn btn-default" style="border-radius:10px;width:180px;height:200px"><img src="cancel.png"><br>Cancel Reservation</button>
<button type="submit" class="btn btn-default" style="border-radius:10px;width:180px;height:200px"><img src="view-sales.png"><br>View Sales</button>
</center>
<hr>

<br>
<!-- <div class="flip"></div>-->
How it works?
<br><br><br>
<strong>Create New Button</strong><br>
	This button is use for creating a new transaction in reservation.
    <br> Transaction is running one at a time. Otherwise it will not process correctly.
    <br> This form is for client-use only. It displays all the data of the customer for reservation purposes.
    <br><br>

<strong>View Reservation List Button</strong><br>
	This button shows the reserved transaction per client.
    <br> Staffs doesn't have the priveledge to modify the information that has been save.
    <br> This list also shows the complete customer's information.
    <br><br> 
   
<strong>Cancel Reservation Button</strong><br>
	This button shows the reserved transaction per client.
    <br> This list can be modify but with the manager's help.
    <br> It has security to  prevent staffs from manipulating the data while on duty. 
    <br> This list also shows the complete customer's information.
    <br><br>    
    
<strong>View Sales Button</strong><br>
	This button shows the all the sales per client reservation.
    <br> It is for admin or manager use only.
    <br><br>  
    
    
    
 	 <center>
  <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
  <br><font color="white">Copyright <sup>®</sup> 2015 PALM VALLEY RESORT.All rights reserved.</font> 
  <a href="fb.com"><img src="fb.png" height="30px" width="30px"></a>
  <a href="twitter.com"><img src="twitter.png" height="30px" width="30px"></a>
  <a href="instagram.com"><img src="instagram.png" height="30px" width="30px"></a>
    <br><br>
   </nav> 
</center>
  <br><br>
 </form>

     </div>
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
