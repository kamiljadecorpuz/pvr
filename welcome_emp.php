
<?php
include("connect.php");

session_start();

if (isset($_SESSION['username'])){
 
	
	
	}
	
	else 
	{
		
		
		header("location:log_employee.php");
		echo"<script>alert('please log in');</script>";
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Palm Valley Resort Reservation</title>

 <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

	<!-- CSS -->
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    

    
    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">




</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">PALM VALLEY RESORT</a>
            </div>
            


 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                
                    
                    
                     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"
          ><i class="fa fa-fw fa-user" style="font-size:22px;"></i>&nbsp;<?php echo $_SESSION['username'];?>&nbsp;<span class="caret"></span></a>
          <ul class="dropdown-menu">
           
          
            <li><a href="session_destroy.php">Logout</a></li>
            
          </ul>
        </li>
                    
                   
					
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


     

	
    
    <section  style="background-color:#e9eaed;">
        <div class="container">
          <br /> <br /> 
            <div class="row" >
				
	
				<div class="col-lg-12">


  					<div class="col-lg-3" style=" border-radius:7px;"><br>
                    	
                      
 						<h3>Hello <?php echo $_SESSION['username'];?></h3>
                        <?php
						
						
     					 $query_user = mysql_query("SELECT * FROM registered_customer.accounts_emp WHERE username = '".$_SESSION['username']."'");
						 $row_user = mysql_fetch_array($query_user);
	
						?>
                        
                        <table>
                        <tbody>
                        <tr>
                        <td><label><?php echo $row_user['fname'];?>&nbsp;<?php echo $row_user['mname'];?>&nbsp;<?php echo $row_user['sname'];?></label>
                        </tr>
                        <tr>
                        <td><label><?php echo $row_user['email'];?></label>
                        </tr>
                        
                         <tr>
                        <td><label><?php echo $row_user['contact'];?></label>
                        </tr>
                        
                         <tr>
                        <td><label>Member Since: <?php echo $row_user['date_reg'];?></label>
                        </tr>
                        
                          <tr>
                        <td><label>Employee ID: <?php echo $row_user['id_no'];?></label>
                        </tr>
                        
                        
                        </tbody>
                        </table>
                         <br>
 						
                        <a href="update_accounts_emp.php"  data-toggle="tooltip" data-placement="right" title="Edit account"><i class="fa fa-fw fa-edit"  style="font-size:14px;"></i>&nbsp;<strong>Manage Account</strong>&nbsp;&nbsp;&nbsp;</a>
                          <br>
                          <?php 
                       echo' <a href="logged_employee.php?'.$row_user['username'].'"  data-toggle="tooltip" data-placement="right" title="Reserve now"><i class="fa fa-fw fa-file-o"  style="font-size:14px;"></i>&nbsp;<strong>Reservation Form</strong>&nbsp;&nbsp;&nbsp;</a>' ?>
                         <br>
                         
                            <table class="table table-bordered" hidden>
              <thead>
           
              </thead>
              
              <tbody>
              <?php
			  
			  
			  
              
			  include("connect.php");

		$result1 = mysql_query("SELECT SUM(Medium_Cottage),SUM(Small_Cottage),SUM(Twin_Exotic),SUM(Single_Huts_Exotic),SUM(pavillion_day),SUM(pavillion_night),SUM(cottage_bbq_big),SUM(cottage_bbq_small) FROM registered_customer.cottages ") or die(mysql_error());
		
	
		
		echo '<td class="alert-success">Medium Cottage</th><td class="alert-success">Small Cottage</th>
		<td class="alert-success">Twin Exotic</th><td class="alert-success">Single Huts Exotic</th>
		<td class="alert-success">pavillion [Day]</th><td class="alert-success">pavillion [Night]</th>
		<td class="alert-success">Big Cottage with BBQ Grill</th><td class="alert-success">Small Cottage with BBQ Grill</th>';
		
		while ($row1 = mysql_fetch_array($result1)) {
			
			
$Medium_Cottage1 = $row1['SUM(Medium_Cottage)'];
$Small_Cottage1 =  $row1['SUM(Small_Cottage)'];
$Twin_Exotic1 = $row1['SUM(Twin_Exotic)'];
$Single_Huts_Exotic1 = $row1['SUM(Single_Huts_Exotic)'];
$pavillion_day1 = $row1['SUM(pavillion_day)'];
$pavillion_night1 = $row1['SUM(pavillion_night)'];
$cottage_bbq_big1 =  $row1['SUM(cottage_bbq_big)'];
$cottage_bbq_small1 = $row1['SUM(cottage_bbq_small)'];




		echo '<tr><td>';

		echo $row1['SUM(Medium_Cottage)'];
		echo '<td>';
		echo $row1['SUM(Small_Cottage)'];
		echo '<td>';
		echo $row1['SUM(Twin_Exotic)'];
		echo '<td>';
		echo $row1['SUM(Single_Huts_Exotic)'];
		echo '<td>';
		echo $row1['SUM(pavillion_day)'];
		echo '<td>';
		echo $row1['SUM(pavillion_night)'];
		echo '<td>';
		echo $row1['SUM(cottage_bbq_big)'];
		echo '<td>';
		echo $row1['SUM(cottage_bbq_small)'];
		

}


		$date_today = date('Y-m-d');
		$result2 = mysql_query("SELECT SUM(Medium_Cottage),SUM(Small_Cottage),SUM(Twin_Exotic),SUM(Single_Huts_Exotic),SUM(pavillion_day),SUM(pavillion_night),SUM(cottage_bbq_big),SUM(cottage_bbq_small) FROM registered_customer.reservation WHERE date_transaction='".$date_today."'") or die(mysql_error());
		
	
		while ($row2 = mysql_fetch_array($result2)) {

$Medium_Cottage2 = $row2['SUM(Medium_Cottage)'];
$Small_Cottage2 =  $row2['SUM(Small_Cottage)'];
$Twin_Exotic2 = $row2['SUM(Twin_Exotic)'];
$Single_Huts_Exotic2 = $row2['SUM(Single_Huts_Exotic)'];
$pavillion_day2 = $row2['SUM(pavillion_day)'];
$pavillion_night2 = $row2['SUM(pavillion_night)'];
$cottage_bbq_big2 =  $row2['SUM(cottage_bbq_big)'];
$cottage_bbq_small2 = $row2['SUM(cottage_bbq_small)'];
		echo '<tr><td>';

		echo $row2['SUM(Medium_Cottage)'];
		echo '<td>';
		echo $row2['SUM(Small_Cottage)'];
		echo '<td>';
		echo $row2['SUM(Twin_Exotic)'];
		echo '<td>';
		echo $row2['SUM(Single_Huts_Exotic)'];
		echo '<td>';
		echo $row2['SUM(pavillion_day)'];
		echo '<td>';
		echo $row2['SUM(pavillion_night)'];
		echo '<td>';
		echo $row2['SUM(cottage_bbq_big)'];
		echo '<td>';
		echo $row2['SUM(cottage_bbq_small)'];
		

}



			  ?>
              </tbody>
              </table>
              
              
        
              
              <table class="table table-bordered">
              <thead>
           
              </thead>
              
              <tbody>
              <?php
			  
			  
			  global $Medium_Cottage1,$Small_Cottage1,$Twin_Exotic1,$Single_Huts_Exotic1 ,$pavillion_day1,$pavillion_night1,$cottage_bbq_big1,$cottage_bbq_small1,$Medium_Cottage2,$Small_Cottage2,$Twin_Exotic2,$Single_Huts_Exotic2 ,$pavillion_day2,$pavillion_night2,$cottage_bbq_big2,$cottage_bbq_small2;
              global $total;
			  include("connect.php");


			  ?>
              
          
              
              
              </tbody>
              </table>
              
           
              
              
              
                 <table class="table table-bordered table-hover">
       
           
              
              <?php
			  	
              
            echo '<tbody>';

			  
			  
			  global $Medium_Cottage1,$Small_Cottage1,$Twin_Exotic1,$Single_Huts_Exotic1 ,$pavillion_day1,$pavillion_night1,$cottage_bbq_big1,$cottage_bbq_small1,$Medium_Cottage2,$Small_Cottage2,$Twin_Exotic2,$Single_Huts_Exotic2 ,$pavillion_day2,$pavillion_night2,$cottage_bbq_big2,$cottage_bbq_small2;
              global $total;
              
			  include("connect.php");
		
		echo "<h4>Total Available Cottage as of ".date("l M d,Y")."</h4>";
		
		echo '<tr>';
		echo '<td>Medium Cottage</td>';
		echo '<td>';
		echo $Medium_Cottage1- $Medium_Cottage2;
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Small Cottage</td>';
		echo '<td>';
		echo $Small_Cottage1 - $Small_Cottage2;
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Twin Exotic</td>';
		echo '<td>';
		echo $Twin_Exotic1 - $Twin_Exotic2;
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Single Huts Exotic</td>';
		echo '<td>';
		echo $Single_Huts_Exotic1 - $Single_Huts_Exotic2;
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>pavillion [Day]</td>';
		echo '<td>';
		echo $pavillion_day1 - $pavillion_day2;
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>pavillion [Night]</td>';
		echo '<td>';
		echo $pavillion_night1 - $pavillion_night2;
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Big Cottage with BBQ Grill</td>';
		echo '<td>';
		echo $cottage_bbq_big1 - $cottage_bbq_big2;
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Small Cottage with BBQ Grill</td>';
		echo '<td>';
		echo $cottage_bbq_small1 - $cottage_bbq_small2;
		echo '</tr>';
		
	
		
	
		
		
		
		
		
		
		

$subMedCot = $Medium_Cottage1- $Medium_Cottage2;
$subSmaCot = $Small_Cottage1 - $Small_Cottage2;
$subTwin = $Twin_Exotic1 - $Twin_Exotic2;
$subSingle = $Single_Huts_Exotic1 - $Single_Huts_Exotic2;
$subPavDay = $pavillion_day1 - $pavillion_day2;
$subPavNight = $pavillion_night1 - $pavillion_night2;
$subBbqBig = $cottage_bbq_big1 - $cottage_bbq_big2;
$subBbqSma = $cottage_bbq_small1 - $cottage_bbq_small2;




			  ?>
              
          
              
              
              </tbody>
              </table>
                        
                        
                        </div>
          <table>            
                        	
    
  
   </table>    
					

  					<div class="col-lg-9"><br><br /><br />
                    	<h4 style="color:#999">resort's schedule</h4>
                        
                        <div class="row" style="background-color:#ffffff; border-radius:7px;">
                        <br />
   <table class="table table-hover  pre-scrollable">
                <thead>
                  <tr>
                  
                  </tr>
                </thead>
                <tbody>
                
             <!--   <th>Medium_Cottage</th><th>Small_Cottage</th><th>Twin_Exotic</th><th>Single_Huts_Exotic</th><th>pavillion_day</th><th>pavillion_night</th><th>cottage_bbq_small</th><th>cottage_bbq_big</th>
-->

<?php



include("connect.php");

$result = mysql_query("SELECT * FROM registered_customer.reservation") or die(mysql_error());

echo '<th class="alert-success">Desired Date<br><sub> yyyy-mm-dd</sub> </th><th class="alert-success">From</th><th class="alert-success">To</th><th class="alert-success">Entrants</th><th class="alert-success">Status</th><th class="alert-success"></th>';

while ($row = mysql_fetch_array($result)) {
  
echo '<tr><td>';



echo $row['date_transaction'];

echo '<td>';

echo $row['from_time'];

echo '<td>';

echo $row['to_time'];

echo '<td>';

echo $row['total_entrants'];

echo '<td>';

echo $row['status'];


echo '<td align="right">';

echo "<a href='viewprocess_emp.php?id=".$row['id']."'><i class='fa fa-fw fa-folder-open-o'  style='font-size:16px;' data-toggle='tooltip' data-placement='bottom' title='View'></i></a> &nbsp;";

echo "<a href='updateprocess_emp.php?id=".$row['id']."'><i class='fa fa-fw fa-edit'  style='font-size:16px;' data-toggle='tooltip' data-placement='bottom' title='Edit'></i></a> &nbsp;";

/*?>echo "<a href='fcfvb.php?id=".$row['id']."'><i class='fa fa-fw fa-times'  style='font-size:16px;' data-toggle='tooltip' data-placement='bottom' title='Delete'></i></a>";<?php */
}


?>

                </tbody>
              </table>
              
              
              <hr class="divider">
              
             
              
              			</div>
                        
                  
					</div>
        
					

          	  	</div>
      	  </div>
       	</div>
        <br /> <br /> <br /><br /> <br /> <br />
    </section>
    
	</div>
    
    
    
    
	 <section  style="background-color:#fae158">
        <div class="container">
          
            <div class="row" align="center">
				
	
				<div class="col-lg-12">


  					<div class="col-lg-4">
                    	<img src="icons/icon-location2.png" height="30px" width="30px"> <label>Loma De Gato, Marilao, Bulacan</label>
 						
 						<label></label>
					</div>

  					<div class="col-lg-4">
                    	<img src="icons/icon-email2.png" height="30px" width="30px"> <label>palmvalleyresort@yahoo.com</label>
						
						<label></label>
					</div>
        
					<div class="col-lg-4">
                    	<img src="icons/icon-contact2.png" height="30px" width="30px"> <label>0915-763-8503</label>
 						
						<label></label>
					</div>

          	  	</div>
      	  </div>
       	</div>
  	 </section> 

	

    <!-- Footer -->
    <footer class="text-center">
       
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <small>Copyright &copy; 2015 Palm Valley Resort . Crafted by Kamil Jade Corpuz . All Rights Reserved</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Twin Exotic Cottage</h2>
                            <hr class="star-primary">
                            <img src="images/6-6.jpg" class="img-responsive img-centered" alt="">
                            <p>A <strong>Twin Huts</strong> for only Php 450.00</p>
							<p>Capacity : 12 to 14 Persons<br><br></p>
							
							<p>A <strong>Single Huts</strong> for only Php 250.00</p>
							<p>Capacity : 6 to 8 Persons</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
							<h2>Medium Bamboo Cottage</h2>
                            <hr class="star-primary">
                            <img src="images/9-9.jpg" class="img-responsive img-centered" alt="">
                            <p>A <strong>Medium Bamboo Cottage</strong> for only Php 500.00</p>
							<p>Capacity : 12 to 14 Persons<br><br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Small Bamboo Cottage</h2>
                            <hr class="star-primary">
                            <img src="images/10-10.jpg" class="img-responsive img-centered" alt="">
                            <p>A <strong>Small Bamboo Cottage</strong> for only Php 300.00</p>
							<p>Capacity : 6 to 8 Persons<br><br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Bamboo Hut Pavillion</h2>
                            <hr class="star-primary">
                            <img src="images/11-11.jpg" class="img-responsive img-centered" alt="">
                            <p>A <strong>Bamboo Hut Pavillion</strong> for only</p>
                            <p>7:30 AM to 6:00 AM :  Php 4,500.00</p>
                            <p>6:00 PM to 11:00 PM :  Php 8,500.00</p>
							<p>Capacity : 60 to 70 Persons</p>
							<p>Time Extension : Php 800.00 per hour <br><br></p>
						
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>
    <script src="js/owl.carousel.js"></script>
 
	
	
	<script>
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
	});
	
	
	
	$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
	  singleItem:true
 
  });
 
});
	</script>
    
    
</body>
</html>
