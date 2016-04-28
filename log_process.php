

     <?php
             include("connect.php");

             if (isset($_POST['username'])){
             $username = $_POST['username'];
             $password = $_POST['password'];
		
				 
             $sql_emp = "SELECT * FROM registered_customer.accounts WHERE username ='".$username."'  AND position = 'Employee' AND password = '".$password."' LIMIT 1";
			 
			 $sql_cus = "SELECT * FROM registered_customer.accounts WHERE username ='".$username."'  AND position = 'Customer' AND password = '".$password."' LIMIT 1";
			 
			 
             $res_emp = mysql_query($sql_emp);
             $res_cus = mysql_query($sql_cus);
			 
			 if (mysql_num_rows($res_emp) == 1 && mysql_num_rows($res_cus)== 0){
              header("location: logged.php");
             }
			 
			 elseif (mysql_num_rows($res_cus) == 1 && mysql_num_rows($res_emp)== 0){
              header("location: logged_client.php");
             }
			 
             else{
          		echo"<script> messagebox.show('sdvsdcd');</script>";
             }
            }
        ?>
       
       
       
       

  <?php /*?>   <?php
             include("connect.php");

             if (isset($_POST['username'])){
             $username = $_POST['username'];
             $password = $_POST['password'];
	
				 
             $sqL = "SELECT * FROM registered_customer.accounts WHERE username ='".$username."' AND password = '".$password."' LIMIT 1";
			 
             $res_cus = mysql_query($sql);
			 
			 if (mysql_num_rows($res) == 1){
              header("location: logged.php");
             }
			 
			 elseif (mysql_num_rows($res) == 0){
              header("location: logged_client.php");
             }
			 
             else{
          		echo"<script> messagebox.show('sdvsdcd');</script>";
             }
            }
        ?>
        


<?php
        include("connect.php");

		if(isset($_GET["position"])){
			$insert = $_GET["position"];
			$query = mysql_query("SELECT * FROM registered_customer.reservation WHERE id = '".$insert."'");
			
			$row = mysql_fetch_array($query);
		}
	
		
        
    ?> <?php */?>