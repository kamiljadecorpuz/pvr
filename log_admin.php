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

<body>



<br/><br/><br/><br/><br/>



        <div class="container" align="center">
          
          
			
<form name="sign" method="post" action"" >
<br/><br/>
<h3>CONFIRMATION PAGE</h3>
Type your authorized code<br><br>
 
<?php
include("admin_session.php");

?>


<input name="code" id="code" type="password" class="form-control" style="border-radius:4px;height:35px;width:300px;font-size:18px;" placeholder= "Admin Code"  required="required">
<br />

 <input type="submit"  value="VALIDATE" id="validate" class="btn btn-success" style="border-radius:4px;width:100px;height:42px;font-size:14px;">



      </form>
     
      
   
          	
      	
       	</div>
  
 
    
</body>
</html>
