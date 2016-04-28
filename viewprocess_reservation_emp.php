

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
	<li><a href="index.php">Home</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="policies.php">Resort Policies</a></li>
    <li><a href="promo.php">Promo & Fees</a></li>	
    <li><a href="cottages.php">Cottages</a></li>					
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="careers.php">Careers</a></li>
   <li class="active"> <a href = "logged_client.php"><font color="white">Reservation</font></a>	</li>		
</ul>	
    

  </nav>

<br><br><br>


      
   
 
  
   <table class="table">
                <thead>
                  <tr>
                  </tr>
                </thead>
                <tbody>
                
             <!--   <th>Medium_Cottage</th><th>Small_Cottage</th><th>Twin_Exotic</th><th>Single_Huts_Exotic</th><th>pavillion_day</th><th>pavillion_night</th><th>cottage_bbq_small</th><th>cottage_bbq_big</th>
-->

<?php
        include("connect.php");

		if(isset($_GET["id"])){
			$insert = $_GET["id"];
			$query = mysql_query("SELECT * FROM registered_customer.reservation WHERE id = '".$insert."'");
			
			$row = mysql_fetch_array($query);
		}
	
		
        
    ?>
                </tbody>
              </table>

  <form action="login.php" method="post">

<button type="submit" class="btn btn-default"
 style="border-radius:10px;width:150px;height:60px"><img src="back-icon.png" stretch="true"></button>
</form>

  <br><br>
       <strong>CUSTOMER INFORMATION :</strong><br><br>
       
     <input name="id" value="<?php echo $row['id']; ?>" disabled="disabled" class="form-control" style="width:70px;
     height:50px">
     <br><br>
     
    <input name="fname" value="<?php echo $row['fname']; ?>" type="text" class="form-control" disabled="disabled"
    style="border-radius:5px;height:50px;width:300px" 		
    placeholder="First name">
        
    <input name="sname" value="<?php echo $row['sname']; ?>" type="text" class="form-control" disabled="disabled"
    style="border-radius:5px;height:50px;width:300px" 
    placeholder="Surname">
    
   <input name="contact_no"  type="text" class="form-control" disabled="disabled"
    value="<?php echo $row['contact_no']; ?>" 
   style="width:20px;border-radius:5px;height:50px;width:200px" placeholder="Contact Number"><br>

   
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

	<tr>
    <td> 
    <input name="date_transaction" type="date" class="form-control" disabled="disabled"
     value="<?php echo $row['date_transaction']; ?>" 
    placeholder="mm/dd/yyyy" style="border-radius:5px;height:50px;width:300px">
    
    <td><td><td><td>
    
	<td>
    <input name="from_time"  type="time" class="form-control" disabled="disabled"
     value="<?php echo $row['from_time']; ?>" 
    placeholder="Hour:Minutes-AM/PM" style="border-radius:5px;height:50px;width:150px">


	<td>
    <input name="to_time" type="time" class="form-control" disabled="disabled"
     value="<?php echo $row['to_time']; ?>" 
     placeholder="Hour:Minutes-AM/PM" style="border-radius:5px;height:50px;width:150px">



	<td>
   <input name="extended_hours" type="text" class="form-control" disabled="disabled"
    value="<?php echo $row['extended_hours']; ?>" 
   style="border-radius:5px;height:50px;width:150px" placeholder="Total Hours"  ></inpuT>
   	
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
	<input name="Medium_Cottage"  value="<?php echo $row['Medium_Cottage']; ?>" disabled="disabled" type="text" class="form-control" 
    style="border-radius:5px;height:30px;width:50px" placeholder="No."></input> 
	Medium Cottage</input>
	<td>500.00 
	<td><font color="blue" size="2">[12-14 Persons]</font> 
	</tr>

	<tr>
	<td>
	<input name="Small_Cottage"  value="<?php echo $row['Small_Cottage']; ?>"  type="text" class="form-control" 
    disabled="disabled" style="border-radius:5px;height:30px;width:50px" placeholder="No."></input> 
	Small Cottage 
	<td>300.00 
	<td><font color="blue" size="2">[6-8 Persons]</font></input> 
	</tr>


	<tr>
	<td>
	<input name="Twin_Exotic"  value="<?php echo $row['Twin_Exotic']; ?>"  type="text" class="form-control" 
   disabled="disabled" style="border-radius:5px;height:30px;width:50px" placeholder="No."  ></input> 
	Twin Exotic Cottage 
	<td>450.00 
	<td><font color="blue" size="2">[12-14 Persons]</font></input> 
	</tr>


	<tr>
	<td>
	<input name="Single_Huts_Exotic"  value="<?php echo $row['Single_Huts_Exotic']; ?>"  type="text" class="form-control" 
    disabled="disabled" style="border-radius:5px;height:30px;width:50px" placeholder="No."  ></input> 
	Single Huts Exotic Cottage 
	<td>250.00 
	<td><font color="blue" size="2">[6-8 Persons]</font></input> 
	</tr>

	<tr>
	<td>
	<input name="pavillion_day"  value="<?php echo $row['pavillion_day']; ?>"  type="text" class="form-control" 
    disabled="disabled" style="border-radius:5px;height:30px;width:50px" placeholder="No."  ></input> 
	Bamboo Hut Pavillion [Daytime 7:30 AM - 6:00 PM] 
	<td>4,500.00 
	<td><font color="blue" size="2">[60-70 Persons]</font></input> 
	</tr>

	<tr>
	<td>
	<input name="pavillion_night"  value="<?php echo $row['pavillion_night']; ?>"  type="text" class="form-control" 
    disabled="disabled" style="border-radius:5px;height:30px;width:50px" placeholder="No."></input> 
	Bamboo Hut Pavillion [Night time 6:00 PM - 11:00 PM] 
	<td>8,500.00 
	<td><font color="blue" size="2">[60-70 Persons]</font></input> 
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
	<input name="cottage_bbq_small"  value="<?php echo $row['cottage_bbq_small']; ?>"  type="text" class="form-control" 
    disabled="disabled" style="border-radius:5px;height:30px;width:50px" placeholder="No."  ></input>
	Bamboo Cottage with Barbeque Grill 
	<td>2250.00 
	<td><font color="blue" size="2">[10 Persons]</font></input>
 	</tr>

	<tr>
	<td>
	<input name="cottage_bbq_big"  value="<?php echo $row['cottage_bbq_big']; ?>"  type="text" class="form-control" 
    disabled="disabled" style="border-radius:5px;height:30px;width:50px" placeholder="No."  ></input> 
	Bamboo Cottage with Barbeque Grill   
	<td>4500.00 
	<td><font color="blue" size="2">[22 Persons]</font></input> 
	</tr>


	</tbody>
	</table>

	<table class="table">
    <tbody>
	<tr>
	<td>
	<input name="add_person_promo"  value="<?php echo $row['add_person_promo']; ?>"  type="text" class="form-control" 
    disabled="disabled" style="border-radius:5px;height:30px;width:50px" placeholder="No." >
	<i><u>Add Person [For Overnight Only]</u></i>
	<td>200.00
	<td>1 Person
	</tr>

	</tbody>
	</table>


	<table class="table">
	<thead>
	<th class="alert-info">PAYMENT PROCESS</th>
	<th  class="alert-info">PAYMENT</th>
	</thead>

<tbody>
<tr>
<td>
<br>
<select name="payprocess"  value="<?php echo $row['payprocess']; ?>" class="form-control" disabled="disabled">
<option value="Walk-In">Walk-In</option>
<option value="Remittance">Remittance</option>
</select>

<!--<input name="ref_no" type="text" class="form-control" style="border-radius:5px;height:30px;width:200px"placeholder="Reference No.">-->

<!--<font color="red" size="2">Must be clarify before the transaction ended.</font><br><br>-->
<td>
<br>
<select name="payment"  value="<?php echo $row['payment']; ?>"  class="form-control" disabled="disabled">
<option value="Installment">Installment</option>
<option value="Full Payment">Full Payment</option>
</select>
</tr>
</tbody>
</table>

<hr>
<strong>ENTRANCE [Head Count]</strong><br><br>

<input name="adult"  value="<?php echo $row['adult']; ?>"  type="text" class="form-control" disabled="disabled"
style="border-radius:5px;height:50px;width:120px" placeholder="Adult"></input> 

<input name="kids"  value="<?php echo $row['kids']; ?>"  type="text" class="form-control" disabled="disabled"
style="border-radius:5px;height:50px;width:120px" placeholder="Kids"></input>

<input name="total_entrants"  value="<?php echo $row['total_entrants']; ?>"  type="text" class="form-control" 
disabled="disabled"
style="border-radius:5px;height:50px;width:120px" placeholder="Total"  ></input>

<br><hr>
<strong>Total Entrance Fee :</strong><br>

<input name="tot_ent"  value="<?php echo $row['tot_ent']; ?>"  type="text" class="form-control" disabled="disabled"
style="border-radius:5px;height:50px;width:500px" placeholder="0.00"  ></input><br>

<br> <strong>Total Amount Payable :</strong><br>

<input name="tot_pay"  value="<?php echo $row['tot_pay']; ?>"  type="text" class="form-control" disabled="disabled"
style="border-radius:5px;height:50px;width:500px" placeholder="0.00"   ></input><br>
        
        
<!--<br> <strong>Cash Tendered :</strong><br>-->
<input name="cash_tendered"  value="<?php echo $row['cash_tendered']; ?>"  type="text" class="form-control" 
disabled="disabled" style="border-radius:5px;height:50px;width:500px" placeholder="0.00" hidden="hidden"></input><br>

<!--<br> <strong>Client Change :</strong><br>-->

<input name="client_change" value="<?php echo $row['client_change']; ?>"  type="text" class="form-control"
disabled="disabled" style="border-radius:5px;height:50px;width:500px" placeholder="0.00"  hidden="hidden"></input>
<br><br><br><br>
 
 
 

		</form>

 	</div>

  

</body>
</html>
