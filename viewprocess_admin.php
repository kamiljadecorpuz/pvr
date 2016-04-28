<?php
include("connect.php");

session_start();

if (isset($_SESSION['code'])){
 
	
	
	}
	
	else 
	{
		
		
		header("location:log_admin.php");
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
   
<script>
		function startTime() {
			var myTime = new Date();
			var myHour = myTime.getHours();
			var myMin = myTime.getMinutes();
			var mySecond = myTime.getSeconds();
			var str1="";
			var ampm = "AM";
			if (myHour>12) {myHour-=12; ampm="PM"}
			if (myHour<10) myHour = "0" + myHour;
			if (myMin<10) myMin = "0" + myMin;
			if (mySecond<10) mySecond = "0" + mySecond;
			str1 = myHour + ":" + myMin + " " + ampm;
			document.getElementById("datetime_today").innerHTML = str1;
			setTimeout("showTimer()",1000);
		}
</script>
</head>
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
 <div class="container">
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
          ><i class="fa fa-fw fa-user" style="font-size:22px;"></i>&nbsp;<?php echo $_SESSION['code'];?>&nbsp;<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="welcome_emp.php">View List</a></li>
             
          
            <li role="separator" class="divider"></li>
            <li><a href="session_destroy.php">Logout</a></li>
            
          </ul>
        </li>
                    
             
					
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>





 
 
  <div class="container">
  

  
  
      <div class="row">
				
		
				<div class="col-lg-12" >
                
               		
                        
                    
                	 <table class="table table-bordered table-striped alert-link">
       
       
       	
             <?php
        include("connect.php");

		if(isset($_GET["id"])){
			$insert_id = $_GET["id"];
			$query_id = mysql_query("SELECT * FROM registered_customer.reservation WHERE id = '".$insert_id."'");
			
			$row_id = mysql_fetch_array($query_id);
		}
	

						
     	$query_user = mysql_query("SELECT * FROM registered_customer.admin WHERE code = '".$_SESSION['code']."'");
		$row_user = mysql_fetch_array($query_user);
	
					
        
    ?>
              
         
              
              <?php
			  	
              
            echo '<tbody style="font-weight:700;font-size:10px;">';

			
			  
			  global $Medium_Cottage1,$Small_Cottage1,$Twin_Exotic1,$Single_Huts_Exotic1 ,$pavillion_day1,$pavillion_night1,$cottage_bbq_big1,$cottage_bbq_small1,$Medium_Cottage2,$Small_Cottage2,$Twin_Exotic2,$Single_Huts_Exotic2 ,$pavillion_day2,$pavillion_night2,$cottage_bbq_big2,$cottage_bbq_small2;
              global $total,$insert_id,$row_id,$query_user,$row_user;
              
			  include("connect.php");
		
		echo "<br><h5>Original Customer Request ".$row_id['date_today']."</h5>";
		
		
		
		
		echo '<tr>';
		echo '<td>Fullname</td>';
		echo '<td>';
		echo $row_id['fname']."&nbsp;&nbsp;".$row_id['mname']."&nbsp;&nbsp;".$row_id['sname'];
		echo '</tr>';
		
		
		echo '<tr>';
		echo '<td>Contact Number</td>';
		echo '<td>';
		echo $row_id['contact'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Transaction Number</td>';
		echo '<td>';
		echo $row_id['id'];
		echo '</tr>';


		echo '<tr>';
		echo '<td>Encoder</td>';
		echo '<td>';
		echo $row_id['encoder'];
		echo '</tr>';
		
		
		echo '<tr>';
		echo '<td>Status of Request</td>';
		echo '<td>';
		echo $row_id['status'];
		echo '</tr>';
		
		
	


		echo '<tr>';
		echo '<td>Requested Date</td>';
		echo '<td>';
		echo $row_id['date_transaction'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Requested Time : From</td>';
		echo '<td>';
		echo $row_id['from_time'];
		echo '</tr>';
		
		
		echo '<tr>';
		echo '<td>Requested Time : To</td>';
		echo '<td>';
		echo $row_id['to_time'];
		echo '</tr>';

		
		
		echo '<tr>';
		echo '<td>Medium Cottage</td>';
		echo '<td>';
		echo $row_id['Medium_Cottage'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Small Cottage</td>';
		echo '<td>';
		echo $row_id['Small_Cottage'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Twin Exotic</td>';
		echo '<td>';
		echo $row_id['Twin_Exotic'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Single Huts Exotic</td>';
		echo '<td>';
		echo $row_id['Single_Huts_Exotic'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>pavillion [Day]</td>';
		echo '<td>';
		echo $row_id['pavillion_day'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>pavillion [Night]</td>';
		echo '<td>';
		echo $row_id['pavillion_night'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Big Cottage with BBQ Grill</td>';
		echo '<td>';
		echo $row_id['cottage_bbq_big'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Small Cottage with BBQ Grill</td>';
		echo '<td>';
		echo $row_id['cottage_bbq_small'];
		echo '</tr>';
		
		
		
		echo '<tr>';
		echo '<td>Pay Process</td>';
		echo '<td>';
		echo $row_id['payprocess'];
		echo '</tr>';
		
		
		echo '<tr>';
		echo '<td>Payment</td>';
		echo '<td>';
		echo $row_id['payment'];
		echo '</tr>';
		
		
		
		echo '<tr>';
		echo '<td>Adult Entrants</td>';
		echo '<td>';
		echo $row_id['adult'];
		echo '</tr>';
	
		
		echo '<tr>';
		echo '<td>Kid Entrants</td>';
		echo '<td>';
		echo $row_id['kids'];
		echo '</tr>';
		
		
		echo '<tr>';
		echo '<td>Total Entrants</td>';
		echo '<td>';
		echo $row_id['total_entrants'];
		echo '</tr>';
		
		
		echo '<tr>';
		echo '<td>Total Entrance Fee</td>';
		echo '<td>';
		echo $row_id['tot_ent'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Total Payment</td>';
		echo '<td>';
		echo $row_id['tot_pay'];
		echo '</tr>';
		
		
		echo '<tr>';
		echo '<td>Cash Tendered</td>';
		echo '<td>';
		echo $row_id['cash_tendered'];
		echo '</tr>';
		
		echo '<tr>';
		echo '<td>Client Change</td>';
		echo '<td>';
		echo $row_id['client_change'];
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
