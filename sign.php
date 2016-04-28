

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
            
  <!--      <div class="logout">
 <form name="logout_form" method="post" action="logged.php">
 <input type="submit" name="Logout" value="Logout" id="Logout" class="btn btn-default" style="border-radius:10px;width:70px;height:30px;background-color:#464545;color:#ffffff;border-color:#464545">
<br><br><br>
  </form>-->
      
<ul class="nav navbar-nav">
	<li><img src="icons/logo.png" width="240px" height="50px"></li>
	<li><a href="index.php">Home</a></li>
    <li><a href="promo.php">Promo & Fees</a></li>	
    <li><a href="cottages.php">Cottages</a></li>					
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="careers.php">Careers</a></li>
        <li><a href="logged_client.php">Customer Reservation</a></li>
       <li class="active"title="For Resort's Employee Only"><a href="logging_in.php">Staff Reservation</a></li>	
</ul>	
    


</nav>
<center>
<br> <br><br>

<img src="icons/employee.png" height="200px" width="200px" />
<br><br>
<a href="logging_in.php"><input type="submit"  value="Login" class="btn btn-default" style="border-radius:4px;width:148px;height:50px;font-size:22px"></a>

<a href="sign.php"> <input type="submit"  value="Sign Up" class="btn btn-default active" style="border-radius:4px;width:148px;height:50px;font-size:22px"></a>
  

  <form name="insert_form" method="post" action="insertproccess2.php">
 


    <br>Fill up this for employee registration only
    <table>
<tbody>
<tr>
     <td><input name="fname" class="form-control" placeholder="First name" style="border-radius:4px;height:35px;width:150px">
  
<td><input name="sname" type="text" class="form-control"  placeholder="Surname" style="border-radius:4px;height:35px;width:150px">
    </tr>
    <tr>
    <td><input name="mname" type="text" class="form-control"   placeholder="Middle name" style="border-radius:4px;height:35px;width:150px">
    
   <td> <select name="position" id="position" style="border-radius:4px;height:35px;width:150px"> class="form-control" >
<option value="Employee" id="Employee">Employee</option>
</select>

</tr>

<tr>
    <td><input name="uname" type="text" class="form-control"   placeholder="Username" style="border-radius:4px;height:35px;width:150px">
    <td><input name="pword" type="text" class="form-control"    placeholder="Password" style="border-radius:4px;height:35px;width:150px">
    </tr>
    <tr>
    <td>
   <td><input name="confirmedpass" type="password" class="form-control"   placeholder="Confirm Password" style="border-radius:4px;height:35px;width:150px">
 
   </tr>
    </tbody>
  </table> 
  
  <br>
    <button type="submit" class="btn" style="border-radius:4px;width:300px;height:50px;font-size:16px">Submit</button>
  
    <br><br><br>
  </form></div>

  
    <br><br><br>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="bootstrap.js"></script>

       

    </div>
 
   </center><br><br><br>


</body>
</html>
