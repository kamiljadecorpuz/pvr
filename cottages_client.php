
<?php
include("connect.php");

session_start();

if (isset($_SESSION['username'])){

	
	}
	
	else 
	{
		
		
		header("location:log_customer.php");
		echo"<script>alert('please log in');</script>";
		
	}
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
	<li><a href="index_client.php">Home</a></li>
    <li><a href="promo_client.php">Promo & Fees</a></li>	
    <li class="active"><a href="cottages_client.php">Cottages</a></li>					
    <li><a href="gallery_client.php">Gallery</a></li>
    <li><a href="careers_client.php">Careers</a></li>
    <li><a href="logged_client.php">Customer Reservation</a></li>
     <li><a href="#"><img src="icons/client.png" height="20px" width="50px"><?php echo $_SESSION['username'];?></a> </li>
 <li><a href="session_destroy.php">Sign Out</a></li>
 
</ul>	

      <!--  <div class="buttons">
<button type="submit" class="btn btn-default" style="border-radius:10px;width:100px;height:35px;hover:green">Save</button>
<button type="submit" class="btn btn-default" style="border-radius:10px;width:100px;height:35px">Delete</button>
<button type="submit" class="btn btn-default" style="border-radius:10px;width:100px;height:35px">Update</button>
<button type="submit" class="btn btn-default" style="border-radius:10px;width:100px;height:35px">Find</button>
</div>-->
        


<!--
<div class="logged-in">
 <form name="logged-in_form" method="post" action="login.php">
 <font face="Agency FB" pointsize="2" color="#FFFFFF">

 </font>
 </form>
 </div>-->
  </nav>

<br>

<div id="carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
    <li data-target="#carousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/8-8.jpg" >
    </div>

    <div class="item">
      <img src="images/6-6.jpg">
    </div>

    <div class="item">
      <img src="images/7-7.jpg">
    </div>

    <div class="item">
      <img src="images/8-8.jpg">
    </div>
    
    <div class="item">
      <img src="images/9-9.jpg">
    </div>
    
    <div class="item">
      <img src="images/10-10.jpg">
    </div>
    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>


       <div class="selections">
 
  <form name="selections_form" method="post" action="login.php">
  <br><br>
 
  <h3>Cottages</h3>
  
  <hr>
<table class="table">
 <thead >

 </thead>
 <tbody>
 
 
     <tr class="active">
    <td><strong>Bamboo Cottages</strong>
    <td>
    <td>
    </tr>
    
    
 <tr class="alert-info">
  <th>Size</th>
  <th>Price</th>
   <th>Capacity</th>
 </tr>
<tr >
<td>Small Cottage
    <td>Php 300.00
    <td>6 to 8 Persons
   </tr>
   
    
  <tr >
<td>Medium Cottage
    <td>Php 500.00
    <td>12 to 14 Persons
   </tr>
     <tr>
   <td><br><br><br>
   <td><br><br><br>
   <td><br><br><br>
    </tr>
    
    <tr class="active">
    <td><strong>Exotic Bamboo Cottages</strong>
    <td>
    <td>
    </tr>
    
    
 <tr class="alert-info">
  <th>Size</th>
  <th>Price</th>
   <th>Capacity</th>
 </tr>
 <tr >
<td>Single Huts
    <td>Php 250.00
    <td>6 to 8 Persons
   </tr>
   
    
  <tr >
<td>Twin Huts
    <td>Php 450.00
    <td>12 to 14 Persons
   </tr>
       <tr>
   <td><br><br><br>
   <td><br><br><br>
   <td><br><br><br>
    </tr>
    
    
    
     <tr class="active">
    <td><strong>Bamboo Hut Pavillion</strong>
    <td><font color="#FF0000">[Php 800.00 per hour]</font>
    <td><font color="#FF0000">Charge for time extension</font>
    </tr>
    
    
 <tr class="alert-info">
  <th>Time</th>
  <th>Price</th>
   <th>Capacity</th>
 </tr>
 
    <tr >
<td>7:30 AM to 6:00 AM
    <td>Php 4,500.00
    <td>60 to 70 Persons
   </tr>
   
    
  <tr >
<td>6:00 PM to 11:00 PM
    <td>Php 8,500.00
    <td>60 to 70 Persons
   </tr>
    
      <tr>
   <td><br><br><br>
   <td><br><br><br>
   <td><br><br><br>
    </tr>
    
    
   </tbody>
   </table>
   
   <hr><H3>Other Facilities</H3><hr>
      <div class="image"> 
      <img src="images/c1.jpg" class="img-thumbnail" title="Coffee / Snack Bar"> 
      <img src="images/c2.jpg"  class="img-thumbnail" title="Videoke Machine"> 
      <img src="images/c3.jpg"  class="img-thumbnail"> 
      <img src="images/c4.jpg"  class="img-thumbnail" title="Fishing Groove"></div>
    <hr>
       <h4>■ Coffee / Snack Bar</h4>
       <h4>■ Fishing Groove</h4>
       <h4>■ Picnic Area</h4>
       <h4>■ Videoke Machine</h4>
       <h4>■ Billiard Table</h4>
       
    		 <center>
             <br><br><br><br>
  <nav class="navbar" role="navigation">
  <br>Copyright <sup>®</sup> 2015 PALM VALLEY RESORT.All rights reserved.
  <a href="http://www.facebook.com" title="Like us on Facebook"><img src="icons/fb.png" height="30px" width="30px"></a>
  <a href="http://www.twitter.com"  title="Follow us on Tweeter"><img src="icons/twitter.png" height="30px" width="30px"></a>
  <a href="http://www.instagram.com" title="Post on Instagram"><img src="icons/instagram.png" height="30px" width="30px"></a>
    <br><br>
   </nav> 
    </div>
 
   </center><br><br><br><br><br><br>
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
