<?php

	include("connect.php");

	mysql_query("UPDATE registered_customer.accounts_emp SET id_no = '".$_POST['id_no']."' WHERE id_no = '".$_POST['id_no']."'");
	
	mysql_query("UPDATE registered_customer.accounts_emp SET date_reg = '".$_POST['date_reg']."' WHERE id_no = '".$_POST['id_no']."'");
	
	mysql_query("UPDATE registered_customer.accounts_emp SET fname = '".$_POST['fname']."' WHERE id_no = '".$_POST['id_no']."'");

	mysql_query("UPDATE registered_customer.accounts_emp SET mname = '".$_POST['mname']."' WHERE id_no = '".$_POST['id_no']."'");

	mysql_query("UPDATE registered_customer.accounts_emp SET sname = '".$_POST['sname']."' WHERE id_no = '".$_POST['id_no']."'");

	mysql_query("UPDATE registered_customer.accounts_emp SET position = '".$_POST['position']."' WHERE id_no = '".$_POST['id_no']."'");
	
	mysql_query("UPDATE registered_customer.accounts_emp SET email = '".$_POST['email']."' WHERE id_no = '".$_POST['id_no']."'");
	
	mysql_query("UPDATE registered_customer.accounts_emp SET contact = '".$_POST['contact']."' WHERE id_no = '".$_POST['id_no']."'");

	mysql_query("UPDATE registered_customer.accounts_emp SET username = '".$_POST['username']."' WHERE id_no = '".$_POST['id_no']."'");
	
	mysql_query("UPDATE registered_customer.accounts_emp SET password = '".$_POST['password']."' WHERE id_no = '".$_POST['id_no']."'");
	

		header("location: log_employee.php");

	mysql_close($dbconnection);
?>