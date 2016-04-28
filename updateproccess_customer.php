<?php

	include("connect.php");

	mysql_query("UPDATE registered_customer.accounts SET id_no = '".$_POST['id_no']."' WHERE id_no = '".$_POST['id_no']."'");
	
	mysql_query("UPDATE registered_customer.accounts SET date_reg = '".$_POST['date_reg']."' WHERE id_no = '".$_POST['id_no']."'");
	
	mysql_query("UPDATE registered_customer.accounts SET fname = '".$_POST['fname']."' WHERE id_no = '".$_POST['id_no']."'");

	mysql_query("UPDATE registered_customer.accounts SET mname = '".$_POST['mname']."' WHERE id_no = '".$_POST['id_no']."'");

	mysql_query("UPDATE registered_customer.accounts SET sname = '".$_POST['sname']."' WHERE id_no = '".$_POST['id_no']."'");

	mysql_query("UPDATE registered_customer.accounts SET position = '".$_POST['position']."' WHERE id_no = '".$_POST['id_no']."'");
	
	mysql_query("UPDATE registered_customer.accounts SET email = '".$_POST['email']."' WHERE id_no = '".$_POST['id_no']."'");
	
	mysql_query("UPDATE registered_customer.accounts SET contact = '".$_POST['contact']."' WHERE id_no = '".$_POST['id_no']."'");

	mysql_query("UPDATE registered_customer.accounts SET username = '".$_POST['username']."' WHERE id_no = '".$_POST['id_no']."'");
	
	mysql_query("UPDATE registered_customer.accounts SET password = '".$_POST['password']."' WHERE id_no = '".$_POST['id_no']."'");
	

		header("location: log_customer.php");

	mysql_close($dbconnection);
?>