<?php
include("connect.php");


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


<br/><br/><br/><br/><br/>


   <section >
        <div class="container">
          
            <div class="row">
				
	
				<div class="col-lg-12">

					  <h2><i class="fa fa-fw fa-user" style="font-size:46px;"></i>employee PAGE</h2>
  					<div class="col-lg-5">
                    	<form name="sign" method="post" action"" >
<br/><br/>
<h3>Please Log in ...</h3>
Type your username and password<br><br>
 
<?php
include("logemp_session.php");

?>

<input name="username" id="username" class="form-control" style="border-radius:4px;" placeholder="Username" required="required" maxlength="20"><br>
<input name="password" id="password" type="password" class="form-control" style="border-radius:4px;" placeholder="Password" maxlength="8" required="required"><br><br>


 <input type="submit"  name="signin" value="SIGN IN" id="signin" class="btn btn-success" style="border-radius:4px;width:150px;height:50px;font-size:18px;">



      </form>
      <br />
     
      
      <br />

<small style="font-size:10px;">Copyright &copy; 2015 Palm Valley Resort <br /> Crafted by Kamil Jade Corpuz <br /> All Rights Reserved</small>
   
					</div>

  					<div class="col-lg-1">
                    	
					</div>
        
					<div class="col-lg-6">
                    	<br/><br/>
                          <br />  
                          <div class="col-lg-12">

                         	 <div class="col-lg-5">

                          
                        	  </div>
                              
                               <div class="col-lg-6">
						<br />
                     
                        	  </div>
                          </div>
                          
                           <a href="sign_employee.php" class="btn btn-danger">Required for Employees: SIGN UP</a>
                          <br/><br/>
                          <br /> 

                    	<img src="icons/icon-location2.png" height="30px" width="30px"> <label>Loma De Gato, Marilao, Bulacan</label><br/>
                    	<img src="icons/icon-email2.png" height="30px" width="30px"> <label>palmvalleyresort@yahoo.com</label><br/>
                        <img src="icons/icon-contact2.png" height="30px" width="30px"> <label>0915-763-8503</label><br/><br><br>
 						
						<label></label>
					</div>

          	  	</div>
      	  </div>
       	</div>
  	 </section> 
  
</body>
</html>
