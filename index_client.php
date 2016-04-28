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
 <link href="css/bootstrap.js" rel="javascript">
   <link href="css/sb-admin.css" rel="stylesheet">



</head>

<body>






      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
              
        	</div>
            
   <!--     <div class="logout">
 <form name="logout_form" method="post" action="logged.php">
 <input type="submit" name="Logout" value="Logout" id="Logout" class="btn btn-default" style="border-radius:10px;width:70px;height:30px;background-color:#464545;color:#ffffff;border-color:#464545">
<br><br><br>
  </form>-->
      
           
<ul class="nav navbar-nav">
	<li><img src="icons/logo.png" width="240px" height="50px"></li>
	<li  class="active"><a href="index_client.php">Home</a></li>
    <li><a href=" promo_client.php">Promo & Fees</a></li>	
    <li><a href=" cottages_client.php">Cottages</a></li>					
    <li><a href=" gallery_client.php">Gallery</a></li>
    <li><a href=" careers_client.php">Careers</a></li>
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


<div id="carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
    <li data-target="#carousel" data-slide-to="5"></li>
    <li data-target="#carousel" data-slide-to="6"></li>
    <li data-target="#carousel" data-slide-to="7"></li>
    <li data-target="#carousel" data-slide-to="8"></li>
    <li data-target="#carousel" data-slide-to="9"></li>
    <li data-target="#carousel" data-slide-to="10"></li>

   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      <div class="item active">
      <img src="images/5.jpg"  class="img-responsive">
    </div>

    <div class="item">
      <img src="images/2.jpg" class="img-responsive">
    </div>

    <div class="item">
      <img src="images/3.jpg" class="img-responsive">
    </div>

    <div class="item">
      <img src="images/4.jpg" class="img-responsive">
    </div>
    
    <div class="item">
      <img src="images/5.jpg" class="img-responsive">
    </div>
    <div class="item">
      <img src="images/1-1.jpg"  class="img-responsive">
    </div>

    <div class="item">
      <img src="images/2-2.jpg" class="img-responsive">
    </div>

    <div class="item">
      <img src="images/3-3.jpg" class="img-responsive">
    </div>

    <div class="item">
      <img src="images/4-4.jpg" class="img-responsive">
    </div>
    
    <div class="item">
      <img src="images/5-5.jpg" class="img-responsive">
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


 <div id="wrapper">
       <div class="responsive">
 
  <form name="selections_form" method="post" action="login.php">
  <br>
 
  <h3>ABOUT PALM VALLEY RESORT</h3>
  
  <hr>
 Business Owner : Mr.Bonifacio Uyyco <br>
Name of Company : Palm Valley Resort <br>
Nature of business : Resort <br>
Company Address :  #47 Loma de gato Marilao Bulacan <br>
Established : January 2002 <br>
<hr>
<strong>History</strong><br><br>
	There are many resorts located in Bulacan . One  of  them is Palm Valley Resort that can be found in Loma de Gato , Marilao Bulacan . The resort  was established  11years  ago . At first, it was known as a privare pool but after few years there are innovations . There are investors who noticed the beauty of the resort and they foresee that it will grow. Thats why these business men are willing to improve the facilities to make it more convenient and attractive. Now a days the resort became  popular because of its accomodation with low prices.  They started to hire some live bands for entertainment . They also accept full resort reservation for special occassion or events. Until now the resort is being patronize during summer . The resort is being  manage by  Mr. Roelio Lim and one of the owners is Mr. Bonifacio Uyyco. After all the resort became successful . 
    
    <hr><strong>Mission</strong><br><br>
    Provide our guests and visitors an unforgettable experience of comfort, pleasure and adventure, where your satisfaction is our best reference.
    
    <hr><strong>Vision</strong><br><br>
    To be the resort destination of choice by creating memorable guest experiences.
    <br>Bringing the world true Asian hospitality experience, the Palm Valley Way.
    
     <hr><strong>Values</strong><br>
<br>- We empower our team
<br>- We forgive honest mistakes
<br>- We support training, education and personal growth
<br>- We support our community through sustainable practices
<br>- We interact as a team with integrity and respect
<br>- We provide a positive, fun and caring environment
<br>- We provide warm and sincere service
<br>- We encourage open and honest communication
<br>- We create an environment that embraces the opportunity for change
<br>- We recognize and celebrate our achievements

<br><br>

 <h3>RESORT POLICIES<hr></h3>
 <strong>Pool Policies</strong><br>
<br>- Colored Clothes are not allowed as swim suits
<br>- Food and drinks are not allowed in swimming pool area
<hr>
 <br><strong>Reservation Policies</strong><br>
<br>- Customer should pay at least a partial payment for date/resort reservation
<br>- Every extension in time has a charge
<br>- No refund for delayed cancellation of reservation 
<br>- Cancelling reservation with paid transaction should be verify and analyze by the in charge manager
<hr>
<br><strong>Payment Policies</strong><br>
<br>- For Indirect payment or Remittance upon reservation, Palm Valley Resort accepts only the following medium: LBC, Cebuana Lhuiller, Mlhuiller Kwarta Padala or Western Union.

<hr><br><br>
For inquiries, email us at: <font color="#0000FF">palmvalleyresort@yahoo.com</font> or drop a message in our official website.
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap.js"></script>
    
  		 <br><br><br><br><br><br>
   	 <center>
  <nav class="navbar" role="navigation">
  <br>Copyright <sup>®</sup> 2015 PALM VALLEY RESORT.All rights reserved.
  <a href="http://www.facebook.com" title="Like us on Facebook"><img src="icons/fb.png" height="30px" width="30px"></a>
  <a href="http://www.twitter.com"  title="Follow us on Tweeter"><img src="icons/twitter.png" height="30px" width="30px"></a>
  <a href="http://www.instagram.com" title="Post on Instagram"><img src="icons/instagram.png" height="30px" width="30px"></a>
    <br><br>
   </nav> 
  
    </div>
 
   </center>

   <br><br><br><br><br><br>
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
