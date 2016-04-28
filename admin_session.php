  <?php
          
			 session_start();
			 

if(isset($_POST['code'])) { 


			 
             $code = $_POST['code'];
            
			 
			 
			$username = stripslashes($code);
		
			$username = mysql_real_escape_string($code);
			
			 
			 $_SESSION['code']=$code;	
             $sql = "SELECT * FROM registered_customer.admin WHERE code ='".$code."' ";
             $res = mysql_query($sql);
             if (mysql_num_rows($res) == 1){

				 header("location: adminpage.php");

             }
			 
             else{
				
          		echo "<font color='#FF0000'>Invalid admin code. Please try again ... </font><br><br>";
			
             }
			 
}
	?>