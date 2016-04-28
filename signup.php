<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Palm Valley Resort Reservation</title>
 <link href="bootstrap.css" rel="stylesheet">
   <link href="sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>
 html,body {
        height:100%;
        width:100%
        margin:fixed;
        padding:fixed;
    }

    #background { 
        width: 100%; 
        height: 100%; 
        position: fixed; 
        left: 0px; 
        top: 0px; 
        z-index: -99999;
        -webkit-user-select:fixed;
        -khtml-user-select: fixed;
        -moz-user-select: fixed;
        -o-user-select: fixed;
        user-select: fixed;
    }

    #background img {
        width:100%;
        height:100%;
    }
	   .logo{
		position: fixed;
		top:13px;
		left:215px;
		 
		}


	.login{
		position: fixed;
		top:13px;
		left:550px;

		}
		
			.signup{
		position: fixed;
		top:13px;
		left:995px;

		}
		
   .register{
		position: fixed;
		top:80px;
		left:300px;
		
		}
   
  .flip{
		width:849px; 
		height:482px; 
		
		-webkit-animation: flip 150s infinite;
		animation: flip 150s infinite;
		}
		
		@-webkit-keyframes flip{
			0% { opacity: 1;background-image:url('1.jpeg');}
			2% { opacity: 1;background-image:url('2.jpeg');}
			
			4% { opacity: 1;background-image:url('1.jpeg');}
			6% { opacity: 1;background-image:url('2.jpeg');}
			
			8% { opacity: 1;background-image:url('1.jpeg');}
			10% { opacity: 1; background-image:url('2.jpeg');}
			
			12% { opacity: 1;background-image:url('1.jpeg');}
			14% { opacity: 1; background-image:url('2.jpeg');}
			
			16% { opacity: 1;background-image:url('1.jpeg');}
			18% { opacity: 1; background-image:url('2.jpeg');}
			
			20% { opacity: 1;background-image:url('1.jpeg');}
			22% { opacity: 1; background-image:url('2.jpeg');}
			
			24% { opacity: 1;background-image:url('1.jpeg');}
			26% { opacity: 1; background-image:url('2.jpeg');}
		
			28% { opacity: 1;background-image:url('1.jpeg');}
			30% { opacity: 1; background-image:url('2.jpeg');}
		
			32% { opacity: 1;background-image:url('1.jpeg');}
			34% { opacity: 1;background-image:url('2.jpeg'); }
		
			36% { opacity: 1;background-image:url('1.jpeg');}
			40% { opacity: 1;background-image:url('2.jpeg'); }
		
			44% { opacity:1; background-image:url('1.jpeg');}
			48% { opacity: 1; background-image:url('2.jpeg');}
			
			52% { opacity:1; background-image:url('1.jpeg');}
			56% { opacity: 1; background-image:url('2.jpeg');}
			
			60% { opacity:1; background-image:url('1.jpeg');}
			64% { opacity: 1; background-image:url('2.jpeg');}
			
			68% { opacity:1; background-image:url('1.jpeg');}
			74% { opacity: 1; background-image:url('2.jpeg');}
			
			78% { opacity:1; background-image:url('1.jpeg');}
			82% { opacity: 1; background-image:url('2.jpeg');}
			
			86% { opacity:1; background-image:url('1.jpeg');}
			90% { opacity: 1; background-image:url('2.jpeg');}
			
			92% { opacity:1; background-image:url('1.jpeg');}
			94% { opacity: 1; background-image:url('2.jpeg');}
			
			95% { opacity:1; background-image:url('1.jpeg');}
			100% { opacity: 1; background-image:url('2.jpeg');}

		
		}
		
	
.top{
	position:fixed;
	top:58px;
	left:218px;
}
 .top ul{
	font-family: corbel;
	font-size: 14px;
	margin:0px;
	padding:0;
	list-style: none;

}

.top ul li{
	display:block;
	position:relative;
	float:left;

}
.top li ul{ display:none;}

.top ul li a{
	display:block;
	text-decoration:none;
	color:#ffffff;
	padding: 5px 104px 5px 15px;
	margin-left:2px;
	background-color:#1f4002;
	white-space: nowrap;
}

.top ul li a:hover{
	background:#4b9c04;
}

.top li:hover ul{
	display:block;
	position:absolute;
}
.top li:hover li{
	font-size:11px;
	float:none;
}

.top li:hover a{
	background:#1f4002;
}
   
   
</style>

<script>
function login()
	{
		<a href='login.html'></a>
	}

</script>



</head>

<body>

<div id="background"><img src="bg2.jpg"></div>
<div class="logo">

<img src="logo.png" width="220px" height="30px">
</div>
 <div class="login">
 <form name="login_form" method="post" action="login.php">
 <font face="Corbel" 	size="4">
<input name="username" class="form-control" style="border-radius:10px;height:30px;width:inherit" placeholder="Username"
maxlength="20">
<input name="password" type="password" class="form-control" style="border-radius:10px;height:30px;width:inherit"
placeholder="Password" maxlength="8">
 <input type="submit" name="Login" value="Login" id="Login" class="btn btn-default" style="border-radius:10px;width:70px;height:30px;background-color:#3F0;color:#00F;border-color:#3F0">
 </font>
  </form>
  
 <div class="signup">
 <form name="signup_form" method="post" action="signup.php">
  <font face="Corbel" 	size="4">
 <input type="submit" name="SignUp" value="Sign Up" id="SignUp" class="btn btn-default" style="border-radius:10px;width:70px;height:30px;background-color:#3F0;color:#00F;border-color:#3F0">
</font>
 
 </form>
 </div>
  </div>
<br><br><br>
		
    <div class="register">
  <form name="insert_form" method="post" action="insertproccess.php">
 
    <font face="corbel"  color="#006600">
     <img src="person2.png" height="50px" width=300px">

    <br>[Fill up this for admin/employee registration only]<br>
      <br><input name="First_name" class="form-control" placeholder="First name">
      <br><input name="Sur_name" type="text" class="form-control"  placeholder="Surname">
     <br><input name="Middle_name" type="text" class="form-control"   placeholder="Middle name">
    <br>Position: 
    <input type="radio" id="admin" value"admin" name="position">Admin</input>
		<input type="radio" id="employee" value="employee" name="position">Employee</input>
    <br><input name="user_name" type="text" class="form-control"   placeholder="Username">
    <br><input name="pass_word" type="text" class="form-control"    placeholder="Password">
   <br><input name="confirmed_pass" type="password" class="form-control"   placeholder="Confirm Password">
  </font><br>
    <button type="submit" class="btn btn-default" style="border-radius:10px;width:100px;height:35px">Submit</button>
  </form>

  </div>
  
  
  <div class="top">

<ul>
	<li><a href="home.html">Home</a></li>
	<li><a href="#">About Us</a></li>
	<li><a href="#">Team</a></li>			
	<li><a href="#">Contacts</a></li>		
	<li><a href="#">Reservation</a></li>
</ul>	

	 
</div>
  
  <?php
  
  
  
  
  ?>
  
                <thead>
                  <tr>
                  </tr>
                </thead>
                <tbody>
<?php


/*
include("connect.php");

$result = mysql_query("SELECT * FROM datab.cs") or die(mysql_error());

echo '<th>Name</th><th>Course</th><th>Year</th><th>Section</th>';

while ($row = mysql_fetch_array($result)) {
  
echo '<tr><td>';

echo $row['user_name'];

echo '<td>';

echo $row['course'];

echo '<td>';

echo $row['year'];

echo '<td>';

echo $row['section'];

}
*/

?>
                </tbody>
              </table>
</body>
</html>