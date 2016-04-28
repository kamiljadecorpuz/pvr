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

					  <h2><i class="fa fa-fw fa-user" style="font-size:46px;"></i>CUSTOMER PAGE</h2>
  					<div class="col-lg-5">
                    	<form name="sign" method="post" action"" >
<br/><br/>
<h3>Please Log in ...</h3>
Type your username and password<br><br>
 
<?php
include("logcus_session.php");

?>

<input name="username" id="username" class="form-control" style="border-radius:4px;" placeholder="Username" required="required" maxlength="20"><br>
<input name="password" id="password" type="password" class="form-control" style="border-radius:4px;" placeholder="Password" maxlength="8" required="required"><br><br>


 <input type="submit"  name="signin" value="SIGN IN" id="signin" class="btn btn-success" style="border-radius:4px;width:150px;height:50px;font-size:18px;">

<br /><br />
 <a href="#"><label> <i class="fa fa-fw fa-lock" style="font-size:16px;"></i> Why do I need an account?</label></a>
<br /> <br />
<small style="font-size:10px;">Copyright &copy; 2015 Palm Valley Resort <br /> Crafted by Kamil Jade Corpuz <br /> All Rights Reserved</small>
      </form>
   
					</div>

  					<div class="col-lg-1">
                    	
					</div>
        
					<div class="col-lg-6">
                    	<br/><br/>
                          <br />  
                          <div class="col-lg-12">

                         	 <div class="col-lg-5">

                          <a href="sign_customer.php"><input type="submit"  name="signup" value="SIGN UP NOW!" id="signup" class="btn btn-info" style="border-radius:4px;width:200px;height:50px;font-size:18px;"></a>
                        	  </div>
                              
                               <div class="col-lg-6">
						<br />
                         <label style="color:#CCC">I dont have an account</label>
                        	  </div>
                          </div>
                          
                          
                          <br/><br/>
                          <br /> 
                    	 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d241.63160880013592!2d120.92160342729838!3d14.305288440184883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfil!2sph!4v1422974926248" width="500" height="200" frameborder="0" style="border:0;" class=""></iframe><br/><br/>
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
