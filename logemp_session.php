  <?php
          
			 session_start();
			 

if(isset($_POST['username'])) { 

        	/* $username = "";
             $password = "";*/
			 
             $username = $_POST['username'];
             $password = $_POST['password'];
			 
			 
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			 
			 $_SESSION['username']=$username;	
             $sql = "SELECT * FROM registered_customer.accounts_emp WHERE username ='".$username."' AND password = '".$password."'";
             $res = mysql_query($sql);
             if (mysql_num_rows($res) == 1){

				 header("location: welcome_emp.php");

             }
			 
             else{
				
          		echo "<font color='#FF0000'>Wrong Username or Password</font><br><br>";
			
             }
			 
}
	?>