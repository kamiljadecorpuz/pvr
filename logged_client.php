<?php
include("connect.php");

session_start();

if (isset($_SESSION['username'])){
 
	
	
	}
	
	else 
	{
		
		
		header("location:login_customer.php");
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
          ><i class="fa fa-fw fa-user" style="font-size:22px;"></i>&nbsp;<?php echo $_SESSION['username'];?>&nbsp;<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="welcomepage.php">View Profile</a></li>
             
          
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
  
  
  <br><br><br>
  
   <h2>Reservation Form</h2>
   
      <div class="row">
				
	
				<div class="col-lg-12">
                
                	<div class="col-lg-3  table-bordered">
                     
                    <br />
                    <h5>schedule</h5>
   <table class="table table-hover table-bordered pre-scrollable">
                <thead>
                  <tr>
                  
                  </tr>
                </thead>
                <tbody>
                
             <!--   <th>Medium_Cottage</th><th>Small_Cottage</th><th>Twin_Exotic</th><th>Single_Huts_Exotic</th><th>pavillion_day</th><th>pavillion_night</th><th>cottage_bbq_small</th><th>cottage_bbq_big</th>
-->

<?php


global $Medium_Cottage1,$Small_Cottage1,$Twin_Exotic1,$Single_Huts_Exotic1 ,$pavillion_day1,$pavillion_night1,$cottage_bbq_big1,$cottage_bbq_small1,$Medium_Cottage2,$Small_Cottage2,$Twin_Exotic2,$Single_Huts_Exotic2 ,$pavillion_day2,$pavillion_night2,$cottage_bbq_big2,$cottage_bbq_small2;

global $total;


include("connect.php");

$result = mysql_query("SELECT * FROM registered_customer.reservation") or die(mysql_error());

echo '<th class="alert-success">Desired Date<br><sub> yyyy-mm-dd</sub> </th><th class="alert-success">From</th><th class="alert-success">To</th>';

while ($row = mysql_fetch_array($result)) {
  
echo '<tr><td>';



echo $row['date_transaction'];

echo '<td>';

echo $row['from_time'];

echo '<td>';

echo $row['to_time'];



}


?>

                </tbody>
              </table>
              
           
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
              
              
              <button class="btn btn-info">VIEW ALL REQUEST</button>
              
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
		
		echo "<br><h4>Total Available Cottage as of ".date("l M d,Y")."</h4>";
		
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
             
             
              
              
            
              
              <div class="col-lg-6">
              
              
             <?php
        
		
		$query_idno = mysql_query("SELECT * FROM registered_customer.accounts WHERE id_no = '".$_GET['id_no']."'"); //error
        $row_idno = mysql_fetch_array($query_idno);
		
?>         
  
 <form name="insert_form" method="post" action="insertprocess_reservation.php" onSubmit="return validate(this);">
  
  <nav class="navbar navbar-fixed-bottom" role="navigation" align="right">
<button type="submit" class="btn btn-default" style="border-radius:10px;width:60px;height:50px"><img src="icons/save-icon.png" stretch="true" title="Submit Application Form" ></button>

</nav>

 <input  type="hidden" name="id_no" id="id_no" type="text" class="form-control" placeholder="id_no"  value="<?php echo $row_idno['id_no'];?>">
     <input name="date_today" id="date_today" type="hidden" class="form-control" style="border-radius:5px;height:50px;width:300px" readonly="readonly"  value="<?php echo date('Y-m-d');?>">
        <input name="datetime_today" id="datetime_today" type="hidden" class="form-control" style="border-radius:5px;height:50px;width:300px" readonly="readonly"  value="<?php echo time('H:m:s');?>" >

  <br><br>
       <strong>CUSTOMER INFORMATION :</strong><br><br>
        <input  type="hidden" name="id_resort" id="id_resort" type="text" class="form-control" placeholder="id_resort" hidden="hidden"  value="pvr">
        
     <input  type="hidden" name="encoder" id="encoder" type="text" class="form-control" placeholder="Encoder" hidden="hidden"  value="customer">
    
         <input  type="hidden" name="status" id="status" type="text" class="form-control" placeholder="status" value="pending" hidden="hidden">
         
    <input name="fname" id="fname" type="text" class="form-control" placeholder="First name" required="required" value="<?php echo $row_idno['fname'];?>" readonly="readonly">
        
         <input name="mname" id=="mname" type="text" class="form-control" placeholder="Middle name" required="required" value="<?php echo $row_idno['mname'];?>" readonly="readonly">
        
    <input name="sname" id=="sname" type="text" class="form-control" placeholder="Surname" required="required" value="<?php echo $row_idno['sname'];?>" readonly="readonly">
    
   <input name="contact" id="contact" type="text" class="form-control" maxlength ="12" readonly="readonly"
    placeholder="Contact Number" required="required" value="<?php echo $row_idno['contact'];?>"><br>

   
   <hr>   <strong>TIME AND DATE SELECTION :</strong><br>
   <BR>
   <table>
   
   <thead>
   <th>Select your exact date for reservation</p></th>

   </thead>
   
   <tbody>
  
<tr><td></tr>


<?php
function minusTime(){
$from_time = new DateTime($_POST['from_time']);
$to_time = new  DateTime($_POST['to_time']);
$extended_hours = $_POST['extended_hours'];

$totalTime = $from_time -> diff ($to_time);

$extended_hours = $totalTime->format("%H");
}
?>

	<tr>
    <td> 
    <input name="date_transaction" id="date_transaction" type="date" class="form-control"  required="required"
    placeholder="mm/dd/yyyy">
    
  
   	
   			 </tr>
  		 </tbody>
	</table>

 <hr> 

 <strong>FIXED SHIFT AVAILABILITY:</strong><br><br>
<input type="radio" name="select_shift" id="fixed" value="one" onclick="toggleTextbox1(this);" onchange="compute_entrants()">
   Select your exact time for reservation

 
  

   

<!--<script>
function shiftfixed(){
var shift = document.getElementById("shift").value;
var day = "7:30 AM";
var night;
var onight;

if (shift == "7:30 AM - 6:00 PM"){
	
	 document.getElementById("from_time").value = day;
	
	}

}
</script>-->




<select name="shift" id="shift" class="form-control" onclick="shiftfixed()" disabled="true" >
<option value="N/A">Select Shift</option>
<option value="day" >7:30 AM - 6:00 PM [DAY SHIFT]</option>
<option value="night">6:00 PM - 11:00 PM [NIGHT SHIFT]</option>
<option value="onight">7:00 PM - 2:00 AM [OVERNIGHT SHIFT]</option>

</select>

<script>

function shiftfixed() {

	var shift = document.getElementById("shift").value;
	

	
if(shift == "day")
{
	document.getElementById("from_time").value = "7:30";
	document.getElementById("to_time").value = "18:00";
	compute_entrants();
	
	}

else if(shift == "night")
{
	document.getElementById("from_time").value = "18:00";
	document.getElementById("to_time").value = "23:00";
	compute_entrants();
	}




else if(shift == "onight")
{
	document.getElementById("from_time").value = "19:00";
	document.getElementById("to_time").value = "2:00";
	compute_entrants();
	}




else {
	document.getElementById("from_time").value = "--:-- --";
	document.getElementById("to_time").value = "--:-- --";
	compute_entrants();
	}
	
	}


function notFixedShift(){
	

	var from_time_select  = document.getElementById("from_time_select").value;
	var to_time_select  = document.getElementById("to_time_select").value;
	
	
	document.getElementById("from_time").value = from_time_select;
	document.getElementById("to_time").value = to_time_select;
	compute_entrants();
	
	}
	
	
	
	function toggleTextbox1(rdo) {
		
		
		
		document.getElementById("from_time_select").disabled = rdo.checked;
		document.getElementById("to_time_select").disabled = rdo.checked;
    	document.getElementById("shift").disabled = !rdo.checked;
		
		document.getElementById("from_time_select").value = "--:-- --";
		document.getElementById("to_time_select").value = "--:-- --";
		
		document.getElementById("from_time").value = "--:-- --";
		document.getElementById("to_time").value = "--:-- --";
		
		document.getElementById("adult").disabled = !rdo.checked;
		document.getElementById("kids").disabled = !rdo.checked;
	
}

function toggleTextbox2(rdo2) {
		
		document.getElementById("shift").disabled = rdo2.checked;
		document.getElementById("shift").value = "N/A";
    	document.getElementById("from_time_select").disabled = !rdo2.checked;
		document.getElementById("to_time_select").disabled = !rdo2.checked;
		
		document.getElementById("from_time").value = "--:-- --";
		document.getElementById("to_time").value = "--:-- --";
		document.getElementById("adult").disabled = !rdo2.checked;
		document.getElementById("kids").disabled = !rdo2.checked;
		
		
}
</script>
<br />
 <strong>NOT FIXED SHIFT AVAILABILITY:</strong><br><br>
            
            <input type="radio" name="select_shift" id="notfixed" value="two" onclick="toggleTextbox2(this);">
            Select your prefered time for reservation
            <br />
			<br />
			<div class="row">
               <div class="col-lg-12">
                  <div class="col-lg-6">
                    	
 		From
	 <select name="from_time_select" id="from_time_select" class="form-control"  required="required"  onchange="notFixedShift(this)" disabled="true">
     
    <option value="--:-- --" selected="selected">--:-- --</option>
    
    <option value="7:30">7:30 AM</option>
    <option value="8:00">8:00 AM</option>
    <option value="8:30">8:30 AM</option>
    <option value="9:00">9:00 AM</option>
    <option value="9:30">9:30 AM</option>
    <option value="10:00">10:00 AM</option>
    <option value="10:30">10:30 AM</option>
    <option value="11:00">11:00 AM</option>
    <option value="11:30">11:30 AM</option>
    <option class="select-dash" disabled="disabled">----------------------</option>
    <option value="12:00">12:00 PM</option>
    <option value="12:30">12:30 PM</option>
    <option value="13:00">1:00 PM</option>
    <option value="13:30">1:30 PM</option>
    <option value="14:00">2:00 PM</option>
    <option value="14:30">2:30 PM</option>
    <option value="15:00">3:00 PM</option>
    <option value="15:30">3:30 PM</option>
    <option value="16:00">4:00 PM</option>
    <option value="16:30">4:30 PM</option>
    <option value="17:00">5:00 PM</option>
    <option value="17:30">5:30 PM</option>
    <option value="18:00">6:00 PM</option>
    <option value="18:30">6:30 PM</option>
    <option value="19:00">7:00 PM</option>
    <option value="19:30">7:30 PM</option>
    <option value="20:00">8:00 PM</option>
    <option value="20:30">8:30 PM</option>
    <option value="21:00">9:00 PM</option>
    <option value="21:30">9:30 PM</option>
    <option value="22:00">10:00 PM</option>
    <option value="22:30">10:30 PM</option>
    <option value="23:00">11:00 PM</option>
    <option value="23:30">11:30 PM</option>
    
    </select>
    
    
				</div>
    
   				 <div class="col-lg-6">
 		To
    <select name="to_time_select" id="to_time_select" class="form-control" required="required" onchange="notFixedShift(this)"  disabled="true">
    <option value="--:-- --" selected="selected">--:-- --</option>
    <option value="24:00">12:00 AM</option>
    <option value="24:30">12:00 AM</option>
    <option value="1:00">1:00 AM</option>
    <option value="1:30">1:30 AM</option>
    <option value="2:00">2:00 AM</option>
    
    <option value="7:30">7:30 AM</option>
    <option value="8:00">8:00 AM</option>
    <option value="8:30">8:30 AM</option>
    <option value="9:00">9:00 AM</option>
    <option value="9:30">9:30 AM</option>
    <option value="10:00">10:00 AM</option>
    <option value="10:30">10:30 AM</option>
    <option value="11:00">11:00 AM</option>
    <option value="11:30">11:30 AM</option>
    <option class="select-dash" disabled="disabled">----------------------</option>
    <option value="12:00">12:00 PM</option>
    <option value="12:30">12:30 PM</option>
    <option value="13:00">1:00 PM</option>
    <option value="13:30">1:30 PM</option>
    <option value="14:00">2:00 PM</option>
    <option value="14:30">2:30 PM</option>
    <option value="15:00">3:00 PM</option>
    <option value="15:30">3:30 PM</option>
    <option value="16:00">4:00 PM</option>
    <option value="16:30">4:30 PM</option>
    <option value="17:00">5:00 PM</option>
    <option value="17:30">5:30 PM</option>
    <option value="18:00">6:00 PM</option>
    <option value="18:30">6:30 PM</option>
    <option value="19:00">7:00 PM</option>
    <option value="19:30">7:30 PM</option>
    <option value="20:00">8:00 PM</option>
    <option value="20:30">8:30 PM</option>
    <option value="21:00">9:00 PM</option>
    <option value="21:30">9:30 PM</option>
    <option value="22:00">10:00 PM</option>
    <option value="22:30">10:30 PM</option>
    <option value="23:00">11:00 PM</option>
    <option value="23:30">11:30 PM</option>
    
    </select>
     			</div>
   		  </div>
		</div>
	 
       <hr>
   

     
     
	
  <!-- <strong>TOTAL TIME EXTENSION</strong>
   <input name="extended_hours" id="extended_hours" type="text" class="form-control" value=""
    placeholder="Total Hours"  readonly  onclick="minusTime();">-->


	<?php include("compute_entrancefee.php"); ?>

   
 
   
     <script type="text/javascript" language="javascript">
	var price_medcot = 500;
	var price_smallcot = 300;
	var price_twincot = 450;
	var price_singlehut = 250;
	var price_pavillion_day = 4500;
	var price_pavillion_night = 8500;
	var price_cottage_bbq_small = 2250;
	var price_cottage_bbq_big = 4500;
	var addPerson = 200;

	
	/*var tot_medcot = Math.abs((price_medcot * document.getElementById("Medium_Cottage").value));
	var tot_smallcot = Math.abs((price_smallcot * document.getElementById("Small_Cottage").value));
	var tot_twincot  = Math.abs((price_twincot * document.getElementById("Twin_Exotic").value));
	var tot_singlehut = Math.abs((price_singlehut * document.getElementById("Single_Huts_Exotic").value));
	var tot_pavillion_day = Math.abs((price_pavillion_day * document.getElementById("pavillion_day").value));
	var tot_pavillion_night = Math.abs((price_pavillion_night * document.getElementById("pavillion_night").value));
	var tot_cottage_bbq_small = Math.abs((price_cottage_bbq_small * document.getElementById("cottage_bbq_small").value));
	var tot_cottage_bbq_big = Math.abs((price_cottage_bbq_big * document.getElementById("cottage_bbq_big").value));
	*/
	
	
	function computation1(){
	
	var tot_medcot = Math.abs((price_medcot * document.getElementById("Medium_Cottage").value));
	document.getElementById ("tot_pay1").value=tot_medcot.toFixed(2);
	
	
	}
	
		function computation2(){

	var tot_smallcot = Math.abs((price_smallcot * document.getElementById("Small_Cottage").value));
	document.getElementById ("tot_pay2").value=tot_smallcot.toFixed(2);
	}
	
		function computation3(){

	var tot_twincot  = Math.abs((price_twincot * document.getElementById("Twin_Exotic").value));

	document.getElementById ("tot_pay3").value=tot_twincot.toFixed(2);
	}
	
	
		function computation4(){
			
	var tot_singlehut = Math.abs((price_singlehut * document.getElementById("Single_Huts_Exotic").value));
	document.getElementById ("tot_pay4").value=tot_singlehut.toFixed(2);
	}
	
	
	
		function computation5(){

	var tot_pavillion_day = Math.abs((price_pavillion_day * document.getElementById("pavillion_day").value));
	document.getElementById ("tot_pay5").value=tot_pavillion_day.toFixed(2);
	}
	
	
		function computation6(){
	var tot_pavillion_night = Math.abs((price_pavillion_night * document.getElementById("pavillion_night").value));
	document.getElementById ("tot_pay6").value=tot_pavillion_night.toFixed(2);
	}
	
	
		function computation7(){

	var tot_cottage_bbq_small = Math.abs((price_cottage_bbq_small * document.getElementById("cottage_bbq_small").value));
	document.getElementById ("tot_pay7").value=tot_cottage_bbq_small.toFixed(2);
	}
	
	
		function computation8(){
	var tot_cottage_bbq_big = Math.abs((price_cottage_bbq_big * document.getElementById("cottage_bbq_big").value));
	document.getElementById ("tot_pay8").value=tot_cottage_bbq_big.toFixed(2);
	}
	
	
	function computation9(){
	var addPersonOvernight = Math.abs((addPerson * document.getElementById("add_person_promo").value));
	document.getElementById ("addPersonOvernight").value=addPersonOvernight.toFixed(2);
	}
	

	
	
	
	function total_computation(){
	/*var totpay1 = document.getElementById("tot_pay1").value;
	var totpay2 = document.getElementById("tot_pay2").value;
	var totpay3 = document.getElementById("tot_pay3").value;
	var totpay4 = document.getElementById("tot_pay4").value;
	var totpay5 = document.getElementById("tot_pay5").value;
	var totpay6 = document.getElementById("tot_pay6").value;
	var totpay7 = document.getElementById("tot_pay7").value;
	var totpay8 = document.getElementById("tot_pay8").value;*/
	
	/*var tot_pay = parseInt(tot_pay1);*/
 var arr = document.getElementsByName('tot');
    var tots=0;
	
	var tot_adult_fee =  Math.abs(document.getElementById('tot_adult_fee').value);
	var tot_kids_fee =  Math.abs(document.getElementById('tot_kids_fee').value);
	var total_ent_fees = (parseInt(tot_adult_fee) + parseInt(tot_kids_fee));
	var result;
    for(var i=0;i<arr.length;i++){
        if(parseInt(arr[i].value))
            tots += parseInt(arr[i].value);
			result = tots + parseInt(total_ent_fees);
    }
	 document.getElementById('tot_pay').hidden = false;
    document.getElementById('tot_pay').value = result.toFixed(2);
	document.getElementById('tot_ent').value = total_ent_fees.toFixed(2);
	
	}
	</script>
    
    <br />   <br />
    
    
    <strong>BAMBOO COTTAGES</strong><br><br>
   
   
   <div class="row">
               <div class="col-lg-12">
                  <div class="col-lg-6">
                    	
 	<br /><img src="images/view_medcot.png" class="img-responsive">
	<br />Medium Cottage
	<br />500.00 
	<br /><font color="blue" size="2">[12-14 Persons]</font> 
    
    <br />
	<br /><select name="Medium_Cottage" id="Medium_Cottage" class="form-control"  onChange="computation1()" style="border-radius:5px;width:100px" placeholder="No.">
    <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>

    </select> 
    
				</div>
    
    
    
    
    
   				 <div class="col-lg-6">
 	<br /><img src="images/view_smcot.png" class="img-responsive">
	
	<br />Small Cottage 
	<br />300.00 
	<br /><font color="blue" size="2">[6-8 Persons]</font> 
    
    <br />
    <br /><select name="Small_Cottage" id="Small_Cottage" class="form-control"  onChange="computation2()" style="border-radius:5px;width:100px" placeholder="No.">
    <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>

    </select>
	
     			</div>
   		  </div>
          
          	<div class="col-lg-12">
                  <div class="col-lg-6">
    <br /><img src="images/view_twin.png" class="img-responsive">
	
	<br />Twin Exotic Cottage 
	<br />450.00 
	<br /><font color="blue" size="2">[12-14 Persons]</font>
	
    <br />
    <br /><select name="Twin_Exotic" id="Twin_Exotic" type="text" class="form-control"  onChange="computation3()" style="border-radius:5px;width:100px" placeholder="No."  >
      <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    </select>
    
         		  </div>
    
   				 <div class="col-lg-6">
    <br /><img src="images/view_single.png" class="img-responsive">
	
	<br />Single Huts Exotic Cottage 
	<br />250.00 
	<br /><font color="blue" size="2">[6-8 Persons]</font>
	
    <br />
    <br /><select name="Single_Huts_Exotic" id="Single_Huts_Exotic" type="text" class="form-control"  onChange="computation4()" style="border-radius:5px;width:100px" placeholder="No."  >
      <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
    
          		 </div>
                 
                 
            </div>
            
            
            <div class="col-lg-12">
            <br /><br />
            <font color="red" size="2">Bamboo Hut Pavillion [Extension per hour: Php. 800.00]</font><br><br>

                  <div class="col-lg-6">
                  
    <br /><img src="images/view_pavday.png" class="img-responsive">
	
	<br />Bamboo Hut Pavillion [Daytime 7:30 AM - 6:00 PM] 
	<br />4,500.00 
	<br /><font color="blue" size="2">[60-70 Persons]</font>
	
    <br />
    <br />	<select  name="pavillion_day" id="pavillion_day" type="text" class="form-control"  onChange="computation5()" style="border-radius:5px;width:100px" placeholder="No."  >
     <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    </select> 

          
         		  </div>
    
   				 <div class="col-lg-6">
                 
    <br /><img src="images/view_pavday.png" class="img-responsive">
	
	
	
	<br />Bamboo Hut Pavillion [Night time 6:00 PM - 11:00 PM] 
	<br />8,500.00 
	<br /><font color="blue" size="2">[60-70 Persons]</font>
	
    <br />
    <br /><select name="pavillion_night" id="pavillion_night" type="text" class="form-control"  onChange="computation6()" style="border-radius:5px;width:100px" placeholder="No.">
     <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    </select> 

              		 </div>
                 
                 
            </div>
            
            
            
            
            <div class="col-lg-12">
            
            <br /><br /> <h5>Overnight Promo Package</h5>
            
                  <div class="col-lg-6">
    <br /><img src="images/view_grill.png" class="img-responsive">
	<br />Bamboo Cottage with Barbeque Grill 
	<br />2250.00 
	<br /><font color="blue" size="2">[10 Persons]</font>
    
     <br />               
   <br /> <select name="cottage_bbq_small" id="cottage_bbq_small" type="text" class="form-control"  onChange="computation7()" style="border-radius:5px;width:100px" placeholder="No."  >
    
     <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option></select>
          <br />
         		  </div>
    
   				 <div class="col-lg-6">
                 
     <br /><img src="images/view_grill2.png" class="img-responsive">
	<br />Bamboo Cottage with Barbeque Grill   
	<br />4500.00 
	<br /><font color="blue" size="2">[22 Persons]</font>
    <br />
     <br /><select name="cottage_bbq_big" id="cottage_bbq_big" type="text" class="form-control"  onChange="computation8()" style="border-radius:5px;width:100px" placeholder="No."  >
    <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option></select> <br />
          		 </div>
                 
                 
            </div>
            
		
	 
  
</div>
<br />
	<label>Add Person [For Overnight Only]</label>
	<label>200.00 / Person</label>
	<select name="add_person_promo" id="add_person_promo" type="text" class="form-control" onchange="computation9()"
    placeholder="No." >
    
     <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
     <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    

</select> 
	
<br /><label>Total Fee for Additional Person [For Overnight Only]</label>
<input name="tot" id="addPersonOvernight" type="text" class="form-control" onblur="total_computation()"
 readonly  placeholder="0.00" 	><br>     



	<table class="table" hidden="">
	<thead>
	<th class="alert-info">PAYMENT PROCESS</th>
	<th  class="alert-info">PAYMENT</th>
	</thead>

<tbody>
<tr>
<td>
<br>
<select name="payprocess" id="payprocess" class="form-control">
<option value="On-Process" selected="selected">On-Process</option>
<option value="Walk-In">Walk-In</option>
<option value="Remittance">Remittance</option>
</select>

<!--<input name="ref_no" type="text" class="form-control" style="border-radius:5px;height:30px;width:200px"placeholder="Reference No.">-->

<!--<font color="red" size="2">Must be clarify before the transaction ended.</font><br><br>-->
<td>
<br>
<select name="payment" id="payment" class="form-control">
<option value="Installment">Installment</option>
<option value="Full Payment">Full Payment</option>
</select>
</tr>
</tbody>
</table>


<!--echo"<td><input type='radio' name='shift' value='1'>[7:30 AM - 6:00 PM]<br>";
echo"<td><input type='radio' name='shift' value='2'>[6:00 PM - 11:00 PM]<br>";
echo"<td><input type='radio' name='shift' value='3'>[7:00 PM - 2:00 AM]";-->


<hr>
<strong>ENTRANCE [Head Count]</strong><br><br>

    
    
        <div class="col-lg-12">

                  <div class="col-lg-4">
 					 No. of Adults
  
  
<select name="adult" id="adult"  class="form-control"  required="required" onchange="compute_entrants()" disabled="disabled"
 placeholder="Adult" title="Manage your schedule first" >
    <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
     <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    

</select> 
         		  </div>
    
   				 <div class="col-lg-4">
                  

 No. of Kids
<select name="kids" id="kids" class="form-control"  required="required" onchange="compute_entrants()" disabled="disabled"
 placeholder="Kids" title="Manage your schedule first">
     <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
     <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option></select>


     
          		 </div>
                 
                 <div class="col-lg-4">
                  Total Entrants
<input name="total_entrants" id="total_entrants"  type="text" class="form-control"  onblur="compute_entrants()"
 placeholder="Total"  readonly>


     
          		 </div>
                 
                 
            </div>
  
  

   <br /><br />
<br><hr>
<br />
<input type="button" onclick="total_computation()" value="Calculate Possible Expenses" class="btn btn-info" >
<br /><br />
<h5>Total Entrance Fee :</h5>

<input name="tot_ent" id="tot_ent" type="text" class="form-control"   onblur ="compute_entrants()" required="required"
 placeholder="0.00"  readonly><br>

 <h5>Total Amount Payable :</h5>

<input name="tot_pay" id="tot_pay" type="text" class="form-control" onblur="total_computation()" required="required"
 readonly  placeholder="0.00" 	><br>
        <br><br><br>
       
           		</div>
                
                  <div class="container">
                  
                  
                 

                  	<div class="col-lg-3 table-bordered table-responsive">
                  
                  	<center>
                    
                     <h3>entrance fee</h3>
                  	<br />
                     <label>DAY SHIFT</label> &nbsp;&nbsp;&nbsp;&nbsp;
                     <small style="font-size:12px;">7:30 AM - 6:00 PM</small>
                     
                     <table class="table table-hover table-bordered" width="80">
						<thead ></thead>
						<tbody>
					
    
    
						<tr style="background-color:#C90;">
						<th>Customer</th>
						<th>Regular</th>
						<th>Holidays</th>
						</tr>
									
						<tr>
						<td>Adult
						<td>120
						<td>140
						</tr>

						<tr>
						<td>Kids
						<td>80
						<td>100
						</tr>

						</tbody>
						</table>
                        
                        
                        <br />
                     <label>NIGHT SHIFT</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <small style="font-size:12px;">6:00 PM - 11:00 PM</small>
                        
                        <table class="table  table-hover table-bordered">
						<thead></thead>
						<tbody>
					

						<tr style="background-color:#C90;">
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
		
						</tbody>
					</table>
                     
                      <br />
                     <label>OVERNIGHT SHIFT</label>&nbsp;&nbsp;&nbsp;&nbsp;
                     <small style="font-size:12px;">7:00 PM - 2:00 AM</small>
                     
                     <table class="table  table-hover table-bordered">
						<thead></thead>
						<tbody>
						

						<tr  style="background-color:#C90;">
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
						</tbody>
					</table>
                     
                     
                     
                     
      <br />       
      <h4>COTTAGE EXPENSE</h4>     
      </center>             
  <label>Medium Cottage </label>   
  <input name="tot" id="tot_pay1" type="text" class="form-control" onblur="total_computation()" hidden
 readonly  placeholder="0.00" 	><br>  
    
   <label>Small Cottage</label>    
 <input name="tot" id="tot_pay2" type="text" class="form-control" onblur="total_computation()"hidden
 readonly  placeholder="0.00" 	><br>
<label>Twin Exotic Cottage </label>
  <input name="tot" id="tot_pay3" type="text" class="form-control" onblur="total_computation()"hidden
 readonly  placeholder="0.00" 	><br> 

<label>Single Huts Exotic Cottage </label>
  <input name="tot" id="tot_pay4" type="text" class="form-control" onblur="total_computation()" hidden
 readonly  placeholder="0.00" 	><br> 
<label>Bamboo Hut Pavillion [Daytime 7:30 AM - 6:00 PM] </label>
  <input name="tot" id="tot_pay5" type="text" class="form-control" onblur="total_computation()" hidden
 readonly  placeholder="0.00" 	><br> 
<label>Bamboo Hut Pavillion [Night time 6:00 PM - 11:00 PM] </label>
  <input name="tot" id="tot_pay6" type="text" class="form-control" onblur="total_computation()" hidden
 readonly  placeholder="0.00" 	><br> 
<label>Bamboo Cottage with Barbeque Grill [10 Persons] </label>
  <input name="tot" id="tot_pay7" type="text" class="form-control" onblur="total_computation()" hidden
 readonly  placeholder="0.00" 	><br> 
<label>Bamboo Cottage with Barbeque Grill [22 Persons] </label>
  <input name="tot" id="tot_pay8" type="text" class="form-control" onblur="total_computation()" hidden
 readonly  placeholder="0.00" 	><br> 



 
       
        
<!--<br> <strong>Cash Tendered :</strong><br>-->
<input name="cash_tendered" id="cash_tendered" type="hidden" class="form-control" hidden
 placeholder="0.00" ><br>

<!--<br> <strong>Client Change :</strong><br>-->

<input name="client_change" id="client_change" type="hidden" class="form-control" hidden
 placeholder="0.00"  >

 
 
 

	

 <div class="row">
               <div class="col-lg-12">
                  <label>DECIDED TIME:</label>   <br />   <br />
                  <div class="col-lg-6">
                    	
                
 		FROM
	 <input name="from_time" id="from_time" type="text" class="form-control"  required="required"  onChange="shiftfixed()" readonly="readonly">
				</div>
    
   				 <div class="col-lg-6">
 		TO
    <input name="to_time" id="to_time" type="text" class="form-control" required="required" onChange="shiftfixed()" readonly="readonly" >
    
    
    <br />
    
    
    
     			</div>
   		  </div>
          
		</div>
 <br />
 <label>Total Adults Fee:</label>   <br />
<input name="tot_adult_fee" id="tot_adult_fee" type="text" class="form-control" readonly  onblur ="compute_entrants()" 
 placeholder="0.00" ><br>
  <label>Total Kids Fee:</label>   <br />
 <input name="tot_kids_fee" id="tot_kids_fee" type="text" class="form-control" readonly  onblur ="compute_entrants()" 
 placeholder="0.00" ><br>




                 	 </div>
                     
                     <br /><br />
                     
                       <small style="font-size:10px;">Copyright &copy; 2015 Palm Valley Resort <br /> Crafted by Kamil Jade Corpuz <br /> All Rights Reserved</small>
                     
              	  </div>
              
                
        	</div>
            
            	</form>
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
