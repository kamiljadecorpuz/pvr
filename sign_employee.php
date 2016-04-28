<?php

include("connect.php");
session_start();


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
              
                <a class="navbar-brand" href="#page-top">PALM VALLEY RESORT</a>
            </div>
            


 			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php"> <i class="fa fa-fw fa-arrow-left" style="font-size:18px;"></i> BACK</a>
                   </li>
                    
                   
					
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


<br/><br/><br/>

<br>

<div id="wrapper">


  <section >
        <div class="container">
          
            <div class="row">
				
	
				<div class="col-lg-12">

					  <h2><i class="fa fa-fw fa-user" style="font-size:46px;"></i>employee PAGE</h2>
  					<div class="col-lg-5">
                    	
<br/><br/>
<h3>SIGN UP</h3>

 <?php
    $date_today = date('Y-m-d');
	
	
	?>
 <form name="insert_form" method="post" action="insertproccess2.php">


    <br>Fill up this for employee registration only<br><br>
    
   

     <input name="date_reg" id="date_reg" class="form-control"  type="hidden" value="<?php echo $date_today;?>">
     <input name="fname" id="fname" class="form-control" placeholder="First name">
   	<input name="mname" id="mname" type="text" class="form-control"   placeholder="Middle name">
     <input name="sname" id="sname" type="text" class="form-control"  placeholder="Surname">
   <input name="position" id="position"  class="form-control" value="employee" type="hidden">


   <input name="email" id="email" class="form-control"   placeholder="Email address : name@yahoo.com">
     <input name="contact" id="contact" class="form-control"   placeholder="Contact number" maxlength ="12">
   
    <input name="username"  id="username" type="text" class="form-control"   placeholder="Username">
    <input name="password"  id="password" type="text" class="form-control"    placeholder="Password">
    
     
    
     
 <br> <br>

   <input type="submit"  name="signup" value="SUBMIT" id="signup" class="btn btn-success" style="border-radius:4px;width:150px;height:50px;font-size:18px;">
  <br /><br/>
  
  
  <br /> <br />

  <br/>  <br />  
    
  </form>
   
					</div>

  					<div class="col-lg-1">
                    	
					</div>
        
					<div class="col-lg-6">
                    	
                        
                        
                        <br/><br/>
                          <br />  
                          
                           <div class="col-lg-12">

                         	 <div class="col-lg-5">
                          
                          <a href="log_customer.php"><input type="submit"  name="login" value="LOG IN" id="login" class="btn btn-info" style="border-radius:4px;width:200px;height:50px;font-size:18px;"></a>
                           </div>
                          
                           <div class="col-lg-6">
						<br />
                         <label style="color:#CCC">I already have an account</label>
                        	  </div>
                          </div>
                          
                          <br/><br/>
                          <br />  
                         
                          
                          
                          
                          <div>
                    	
                         </div>
                         <br/><br/>
                    	<img src="icons/icon-location2.png" height="30px" width="30px"> <label>Loma De Gato, Marilao, Bulacan</label><br/>
                    	<img src="icons/icon-email2.png" height="30px" width="30px"> <label>palmvalleyresort@yahoo.com</label><br/>
                        <img src="icons/icon-contact2.png" height="30px" width="30px"> <label>0915-763-8503</label><br/><br><br>
 						
						
                        
                        <small style="font-size:10px;">Copyright &copy; 2015 Palm Valley Resort <br /> Crafted by Kamil Jade Corpuz <br /> All Rights Reserved</small>
					</div>

          	  	</div>
      	  </div>
       	</div>
  	 </section> 
 </div>

  
</body>
</html>
