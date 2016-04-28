<?php
include("connect.php");

session_start();

if (isset($_SESSION['uname'])){

	
	}
	
	else 
	{
		
		
		header("location:logging_in.php");
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
            
            
           
<ul class="nav navbar-nav">
	<li><img src="icons/logo.png" width="240px" height="50px"></li>

   <li class="active"> <a href = "login.php"><font color="white">Staff Reservation</font></a>	</li>
   
    <li><a href="#"><img src="icons/client.png" height="20px" width="50px"><?php echo $_SESSION['uname'];?></a> </li>
 <li><a href="session_destroy.php">Sign Out</a></li>
       		
</ul>	
    

  </nav>

<br><br><br>


      
  <div class="container pre-scrollable">
   <table class="table table-hover">
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

echo '<th class="alert-info">Customer Name</th><th class="alert-info">Desired Date</th><th class="alert-info">From</th><th class="alert-info">To</th><th class="alert-info">Total Entrants</th><th class="alert-info">Extended Hours</th><th class="alert-info">Status</th><th class="alert-info"></th>';

while ($row = mysql_fetch_array($result)) {
  
echo '<tr><td>';

echo $row['fname'];

echo '<td>';

echo $row['date_transaction'];

echo '<td>';

echo $row['from_time'];

echo '<td>';

echo $row['to_time'];

echo '<td align="center">';

echo $row['total_entrants'];

echo '<td align="center">';

echo $row['extended_hours'];

echo '<td>';

echo $row['status'];

echo '<td align="right">';
echo "<a href='viewprocess_reservation_emp.php?id=".$row['id']."'> <img src='icons/view-icon.png' title='View Information'></a>";

echo "<a href='updateprocess_reservation_emp.php?id=".$row['id']."'> <img src='icons/update-icon.png' title='Update Information'></a>";


echo "<a href='delete_confirmation_emp.php'> <img src='icons/delete-icon.png' title='Delete Information'></a>";



}



?>

                </tbody>
              </table>
              
           </div>
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
              
           
              
              
              
                 <table class="table table-bordered table-responsive">
       
           
              
              <?php
			  	
              
            echo '<tbody align="center">';

			  
			  
			  global $Medium_Cottage1,$Small_Cottage1,$Twin_Exotic1,$Single_Huts_Exotic1 ,$pavillion_day1,$pavillion_night1,$cottage_bbq_big1,$cottage_bbq_small1,$Medium_Cottage2,$Small_Cottage2,$Twin_Exotic2,$Single_Huts_Exotic2 ,$pavillion_day2,$pavillion_night2,$cottage_bbq_big2,$cottage_bbq_small2;
              global $total;
              
			  include("connect.php");
		
		echo "<br><h4>Total Available Cottage as of ".date("l M d,Y")."</h4>";
		
		echo '<td class="alert-success">Medium Cottage</th><td class="alert-success">Small Cottage</th>
		<td class="alert-success">Twin Exotic</th><td class="alert-success">Single Huts Exotic</th>
		<td class="alert-success">pavillion [Day]</th><td class="alert-success">pavillion [Night]</th>
		<td class="alert-success">Big Cottage with BBQ Grill</th><td class="alert-success">Small Cottage with BBQ Grill</th>';
		
		echo '<tr align="center"><td>';

		echo $Medium_Cottage1- $Medium_Cottage2;
		echo '<td>';
		echo $Small_Cottage1 - $Small_Cottage2;
		echo '<td>';
		echo $Twin_Exotic1 - $Twin_Exotic2;
		echo '<td>';
		echo $Single_Huts_Exotic1 - $Single_Huts_Exotic2;
		echo '<td>';
		echo $pavillion_day1 - $pavillion_day2;
		echo '<td>';
		echo $pavillion_night1 - $pavillion_night2;
		echo '<td>';
		echo $cottage_bbq_big1 - $cottage_bbq_big2;
		echo '<td>';
		echo $cottage_bbq_small1 - $cottage_bbq_small2;
		

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
              
              
     <br><br><br><br><br><br>
 <form name="insert_form" method="post" action="insertprocess_reservation_staff.php" onSubmit="return validate(this);">
  

<button type="submit" class="btn btn-default" style="border-radius:10px;width:60px;height:50px"><img src="icons/save-icon.png" stretch="true"></button>
<!--<button type="submit" class="btn btn-default" style="border-radius:10px;width:60px;height:60px"><img src="delete-icon.png" stretch="true"></button>
<button type="submit" class="btn btn-default" style="border-radius:10px;width:60px;height:60px"><img src="update-icon.png" stretch="true"></button>
<button type="submit" class="btn btn-default" style="border-radius:10px;width:60px;height:60px"><img src="search-icon.png" stretch="true"></button>-->


  <br><br>
       <strong>CUSTOMER INFORMATION :</strong><br><br>
        <input name="id_resort" id="id_resort" type="text" class="form-control" style="border-radius:5px;height:50px;width:300px" placeholder="id_resort" hidden="hidden"  value="pvr">
        
     <input name="cashier" id="cashier" type="text" class="form-control" style="border-radius:5px;height:50px;width:300px" placeholder="Cashier" hidden="hidden"  value="<?php echo $_SESSION['uname'];?>">
    
         <input name="status" id="status" type="text" class="form-control" style="border-radius:5px;height:50px;width:300px" placeholder="status" value="Pending" hidden="hidden">
         
    <input name="fname" id="fname" type="text" class="form-control" style="border-radius:5px;height:50px;width:300px" 		
    placeholder="First name" required="required">
        
    <input name="sname" id=="sname" type="text" class="form-control" style="border-radius:5px;height:50px;width:300px" 
    placeholder="Surname" required="required">
    
   <input name="contact_no" id="contact_no" type="text" class="form-control" maxlength ="10"
   style="width:20px;border-radius:5px;height:50px;width:200px" placeholder="Contact Number:9*********" required="required"><br>

   
   <hr>   <strong>TIME AND DATE SELECTION :</strong><br>
   <BR>
   <table>
   
   <thead>
   <th><p class="announcement-text">Select your exact date for reservation</p></th>
   <th></th>
   <th></th> 
   <th></th>
   <th></th>
   <th><p class="announcement-text">Select your exact time</p></th>
   <th><p class="announcement-text">availability for reservation</p></th>
   </thead>
   
   <tbody>
  
<tr><td></tr>

<tr>
<td><td><td><td><td>
<td>FROM
<td>TO
<td>EXTENDED HOUR(S)
</tr>
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
    placeholder="mm/dd/yyyy" style="border-radius:5px;height:50px;width:300px">
    
    <td><td><td><td>
    
	<td>
    <input name="from_time" id="from_time" type="time" class="form-control"  required="required"
    placeholder="Hour:Minutes-AM/PM" style="border-radius:5px;height:50px;width:150px">


	<td>
    <input name="to_time" id="to_time" type="time" class="form-control" required="required"
     placeholder="Hour:Minutes-AM/PM" style="border-radius:5px;height:50px;width:150px" >



	<td>
   <input name="extended_hours" id="extended_hours" type="text" class="form-control" value="<?php $extended_hours ?> "
   style="border-radius:5px;height:50px;width:150px" placeholder="Total Hours"  readonly  onclick="minusTime();"></inpuT>
   	
   			 </tr>
  		 </tbody>
	</table>

 <hr> 

 <strong>FIXED SHIFT AVAILABILITY:</strong><br><br>
 <table class="table">
 <thead>
 <th>Day Shift</th>
  <th>Night Shift</th>
   <th>Overnight Shift</th>
 </thead>
 
 <tbody>
<tr>
<?php
//$shift = 0;
//$day;
//$night;
//$onight;
//
//echo"<td><input type='radio' name='shift' value='1'>[7:30 AM - 6:00 PM]</input><br>";
//echo"<td><input type='radio' name='shift' value='2'>[6:00 PM - 11:00 PM]</input><br>";
//echo"<td><input type='radio' name='shift' value='3'>[7:00 PM - 2:00 AM]</input>";
//
//if ($shift == 1){
//	
//	
//	
//	}
//

?>

   </tr>
   </tbody>
   </table>
   
   <hr>
    
    <strong>BAMBOO COTTAGE :</strong><br><br>
    <table class="table">
    <thead>
    <th>Cottage Type</th>
  	<th>Cottage Price</th>
    <th>Capacity</th>
    </thead>
    
    <tbody>
    <tr>
	<td>

    
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
    for(var i=0;i<arr.length;i++){
        if(parseInt(arr[i].value))
            tots += parseInt(arr[i].value);
    }
	 document.getElementById('tot_pay').hidden = false;
    document.getElementById('tot_pay').value = tots.toFixed(2);
	
	
	}
	</script>
    
	<select name="Medium_Cottage" id="Medium_Cottage" class="form-control"  onChange="computation1()"
    style="border-radius:5px;height:30px;width:60px" placeholder="No.">
    <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>

    </select> 
	Medium Cottage
	<td>500.00 
	<td><font color="blue" size="2">[12-14 Persons]</font> 
	</tr>

	<tr>
	<td>
	<select name="Small_Cottage" id="Small_Cottage" class="form-control"  onChange="computation2()"
    style="border-radius:5px;height:30px;width:60px" placeholder="No.">
      <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    
    
    </select>
	Small Cottage 
	<td>300.00 
	<td><font color="blue" size="2">[6-8 Persons]</font> 
	</tr>


	<tr>
	<td>
	<select name="Twin_Exotic" id="Twin_Exotic" type="text" class="form-control"  onChange="computation3()"
    style="border-radius:5px;height:30px;width:60px" placeholder="No."  >
      <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    </select>
	Twin Exotic Cottage 
	<td>450.00 
	<td><font color="blue" size="2">[12-14 Persons]</font>
	</tr>


	<tr>
	<td>
	<select name="Single_Huts_Exotic" id="Single_Huts_Exotic" type="text" class="form-control"  onChange="computation4()"
    style="border-radius:5px;height:30px;width:60px" placeholder="No."  >
      <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    </select>
	Single Huts Exotic Cottage 
	<td>250.00 
	<td><font color="blue" size="2">[6-8 Persons]</font>
	</tr>

	<tr>
	<td>
	<select  name="pavillion_day" id="pavillion_day" type="text" class="form-control"  onChange="computation5()"
    style="border-radius:5px;height:30px;width:60px" placeholder="No."  >
     <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    </select> 
	Bamboo Hut Pavillion [Daytime 7:30 AM - 6:00 PM] 
	<td>4,500.00 
	<td><font color="blue" size="2">[60-70 Persons]</font>
	</tr>

	<tr>
	<td>
	<select name="pavillion_night" id="pavillion_night" type="text" class="form-control"  onChange="computation6()"
    style="border-radius:5px;height:30px;width:60px" placeholder="No.">
     <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    </select> 
	Bamboo Hut Pavillion [Night time 6:00 PM - 11:00 PM] 
	<td>8,500.00 
	<td><font color="blue" size="2">[60-70 Persons]</font>
	</tr>
	</tbody>

	<font color="red" size="2">Bamboo Hut Pavillion [Extension per hour: Php. 800.00]</font><br><br>

	<thead class="table">
	<th><br><br>Overnight Promo Package</th>
	<th>Overnight Promo Price</th>
	<th>Capacity</th>
	</thead>

	<tbody>
	<tr>
	<td>
	<select name="cottage_bbq_small" id="cottage_bbq_small" type="text" class="form-control"  onChange="computation7()"
    style="border-radius:5px;height:30px;width:60px" placeholder="No."  >
    
     <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option></select>
	Bamboo Cottage with Barbeque Grill 
	<td>2250.00 
	<td><font color="blue" size="2">[10 Persons]</font>
 	</tr>

	<tr>
	<td>
	<select name="cottage_bbq_big" id="cottage_bbq_big" type="text" class="form-control"  onChange="computation8()"
    style="border-radius:5px;height:30px;width:60px" placeholder="No."  >

    
    
      <option value="0" selected="selected">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option></select> 
	Bamboo Cottage with Barbeque Grill   
	<td>4500.00 
	<td><font color="blue" size="2">[22 Persons]</font>
	</tr>


<tr>
	<th><br><br>
	<th><br><br>
	<th><br><br>
	</tr>
   
	<tr>
	<td>
	<input name="add_person_promo" id="add_person_promo" type="text" class="form-control" onchange="computation9()"
    style="border-radius:5px;height:30px;width:60px" placeholder="No." >
	<i><u>Add Person [For Overnight Only]</u></i>
	<td>200.00
	<td>1 Person
	</tr>

	</tbody>
	</table>

<input name="tot" id="addPersonOvernight" type="text" class="form-control" onblur="total_computation()" hidden
style="border-radius:5px;height:50px;width:500px" readonly  placeholder="0.00" 	></input><br>     



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

<hr>
<strong>ENTRANCE [Head Count]</strong><br><br>
<script type="text/javascript" language="javascript">


	
	function compute_entrants(){
	var entrantsAdult = Math.abs((document.getElementById("adult").value));
	var entrantsKid = Math.abs((document.getElementById("kids").value));
	
	
	if(entrantsAdult != "" && entrantsKid !=""){
	var result = parseInt(entrantsAdult) + parseInt(entrantsKid);
	document.getElementById ("total_entrants").value=result;

	}
	
	
	
	
	
	}
	</script>
    
    
<input name="adult" id="adult" type="text" class="form-control"  required="required" onkeypress="compute_entrants()"
style="border-radius:5px;height:50px;width:120px" placeholder="Adult"></input> 

<input name="kids" id="kids" type="text" class="form-control"  required="required" onkeypress="compute_entrants()"
style="border-radius:5px;height:50px;width:120px" placeholder="Kids"></input>


<input name="total_entrants" id="total_entrants"  type="text" class="form-control"  onkeypress="compute_entrants()"
style="border-radius:5px;height:50px;width:120px" placeholder="Total"  readonly></input>


<input type="button" onclick="total_computation()" value="Calculate Your Possible Expenses" class="btn" style="border-radius:5px;height:50px;width:500px;font-size:22px">
<br><hr>



<h3>Total Entrance Fee :</h3>

<input name="tot_ent" id="tot_ent" type="text" class="form-control"   hidden="true"
style="border-radius:5px;height:50px;width:500px;font-size:22px" placeholder="0.00"  readonly></input><br>

<br> <h3>Total Amount Payable :</h3>

    


<input name="tot_pay" id="tot_pay" type="text" class="form-control" onblur="total_computation()" hidden="true"
style="border-radius:5px;height:50px;width:500px;font-size:22px" readonly  placeholder="0.00" 	></input><br>
        <br><br><br>
       
      
       
  <input name="tot" id="tot_pay1" type="text" class="form-control" onblur="total_computation()" hidden
style="border-radius:5px;height:50px;width:500px" readonly  placeholder="0.00" 	></input><br>     
       
 <input name="tot" id="tot_pay2" type="text" class="form-control" onblur="total_computation()"hidden
style="border-radius:5px;height:50px;width:500px" readonly  placeholder="0.00" 	></input><br>

  <input name="tot" id="tot_pay3" type="text" class="form-control" onblur="total_computation()"hidden
style="border-radius:5px;height:50px;width:500px" readonly  placeholder="0.00" 	></input><br> 


  <input name="tot" id="tot_pay4" type="text" class="form-control" onblur="total_computation()" hidden
style="border-radius:5px;height:50px;width:500px" readonly  placeholder="0.00" 	></input><br> 

  <input name="tot" id="tot_pay5" type="text" class="form-control" onblur="total_computation()" hidden
style="border-radius:5px;height:50px;width:500px" readonly  placeholder="0.00" 	></input><br> 

  <input name="tot" id="tot_pay6" type="text" class="form-control" onblur="total_computation()" hidden
style="border-radius:5px;height:50px;width:500px" readonly  placeholder="0.00" 	></input><br> 

  <input name="tot" id="tot_pay7" type="text" class="form-control" onblur="total_computation()" hidden
style="border-radius:5px;height:50px;width:500px" readonly  placeholder="0.00" 	></input><br> 

  <input name="tot" id="tot_pay8" type="text" class="form-control" onblur="total_computation()" hidden
style="border-radius:5px;height:50px;width:500px" readonly  placeholder="0.00" 	></input><br> 



 
       
        
<!--<br> <strong>Cash Tendered :</strong><br>-->
<input name="cash_tendered" id="cash_tendered" type="text" class="form-control" hidden
style="border-radius:5px;height:50px;width:500px" placeholder="0.00" ></input><br>

<!--<br> <strong>Client Change :</strong><br>-->

<input name="client_change" id="client_change" type="text" class="form-control" hidden
style="border-radius:5px;height:50px;width:500px" placeholder="0.00"  ></input>
<br><br><br><br>
 
 
 

		</form>




 	

 	</div>

  

</body>
</html>
