

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
    <li class="active"><a href="promo.php">Promo & Fees</a></li>	
    <li><a href="cottages.php">Cottages</a></li>					
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="careers.php">Careers</a></li>
    <li><a href="log_customer.php">Customer Reservation</a></li>
       <li title="For Resort's Employee Only"><a href="logging_in.php">Staff Reservation</a></li>	
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
 <!--<marquee scrollamount="15" direction="right"><img src="tag.png"></marquee>-->
 
  
 <BR>
 
<img src="banner.gif" width="900px">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap.js"></script>


 <div class="selections"> 
  <form name="selections_form" method="post" action="login.php">
  <br><br>
 
  <h3>PROMO</h3>
  
  <hr>
<strong>Overnyt Promo</strong><br><br>
	- Bamboo Cottage with Barbecue Grill for only Php. 2,250.00 (10 Persons)<br>
    - Bamboo Cottage with Barbecue Grill for only Php. 4,500.00 (22 Persons)
    
    <hr>
   <h3>FEES</h3> 
  <table class="table">
 <thead >

 </thead>
 <tbody>
 
 
     <tr class="active">
    <td><strong>Entrance Fee for Day Shift</strong>
    <td>
    <td>
    </tr>
    
    
 <tr class="alert-info">
  <th>Customer</th>
  <th>Regular</th>
   <th>Holidays</th>
 </tr>
<tr >
<td>Adult
    <td>120
    <td>140
   </tr>
   
    
     <tr>
    <td>Kids
    <td>80
    <td>100
    </tr>
    
     <tr>
   <td><br><br><br>
   <td><br><br><br>
   <td><br><br><br>
    </tr>
    
    <tr class="active">
    <td><strong>Entrance Fee for Night Shift</strong>
    <td>
    <td>
    </tr>
    
    
 <tr class="alert-info">
  <th>Customer</th>
  <th>Regular</th>
   <th>Holidays</th>
 </tr>
  <tr>
    <td>Adults
    <td>140
    <td>150
    </tr>
    
     <tr>
    <td>Kids
    <td>100
    <td>120
    </tr>
    
       <tr>
   <td><br><br><br>
   <td><br><br><br>
   <td><br><br><br>
    </tr>
    
    
    
     <tr class="active">
    <td><strong>Entrance Fee for Over Night Shift </strong>
    <td>[Additional Entrance Fee Per Head]
    <td>
    </tr>
    
    
 <tr class="alert-info">
  <th>Customer</th>
  <th>Regular</th>
   <th>Holidays</th>
 </tr>
  <tr>
    <td>Adults
    <td>200
    <td>200
    </tr>
    
     <tr>
    <td>Kids
    <td>200
    <td>200
    </tr>
    
      <tr>
   <td><br><br><br>
   <td><br><br><br>
   <td><br><br><br>
    </tr>
    
    
   </tbody>
   </table>
     </form>
       </div>
   		 <center>
         <br><br><br><br>
 <nav class="navbar" role="navigation">
  <br>Copyright <sup>®</sup> 2015 PALM VALLEY RESORT.All rights reserved.
  <a href="http://www.facebook.com" title="Like us on Facebook"><img src="icons/fb.png" height="30px" width="30px"></a>
  <a href="http://www.twitter.com"  title="Follow us on Tweeter"><img src="icons/twitter.png" height="30px" width="30px"></a>
  <a href="http://www.instagram.com" title="Post on Instagram"><img src="icons/instagram.png" height="30px" width="30px"></a>
    <br><br>
   </nav> 
  </center>
    
 
   <br><br><br><br><br><br>


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
