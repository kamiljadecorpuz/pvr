
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
    <li class="active"><a href="careers.php">Careers</a></li>
    <li><a href="log_customer.php">Customer Reservation</a></li>
       <li title="For Resort's Employee Only"><a href="logging_in.php">Staff Reservation</a></li>
       	
</ul>	
    
  </nav>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap.js"></script>

 <br><br><br>
  
 
 <div id="wrapper">
 <center>
  <h3>BUILD YOUR CAREER</h3>
  
 

  <form name="build_form" method="post" action="buildcareers.php">
 
     <br> <br>
     <input name="sname" id="sname" type="text" class="form-control"  placeholder="Surname" style="border-radius:4px;height:40px;width:responsive"><BR><BR>
     <input name="fname" id="fname" class="form-control" placeholder="First name" style="border-radius:4px;height:40px;width:responsive"><BR><BR>
    <input name="mname" id="mname" type="text" class="form-control"   placeholder="Middle name" style="border-radius:4px;height:40px;width:responsive">
    <br><br>
    <select name="position" id="position" style="width:responsive;height:40px;border-radius:4px" class="form-control" >
<option value="N/A">Desired Position</option>
<option value="Manager">Manager</option>
<option value="OJT">OJT</option>
<option value="Part Time Job">Part Time Job</option>
</select>

 <BR><BR>

    <button type="submit" class="btn" style="border-radius:4px;width:300px;height:60px;font-size:16px">Submit</button>
    
  
  </form>
</center>
 <!-- 
   <BR><BR>
   <h3>APPLICANTS</h3>
   <table class="table table-hover" >
                <thead>
                  <tr>
                  </tr>
                </thead>
                <tbody >
<?php

/*

include("connect.php");

$result = mysql_query("SELECT * FROM registered_customer.careers") or die(mysql_error());

echo '<th class="alert-info">Surname</th><th class="alert-info">First Name</th><th class="alert-info">Middle Name</th><th class="alert-info">Desired Position</th>';

while ($row = mysql_fetch_array($result)) {
  
echo '<tr><td>';

echo $row['sname'];

echo '<td>';

echo $row['fname'];

echo '<td>';

echo $row['mname'];

echo '<td>';

echo $row['position'];


}
*/

?>
                </tbody>
              </table>
   <BR><BR> <BR><BR> <BR><BR>-->
  
  
  
  
    </div>


 </div>

  
  
  
</body>
</html>
