<?php
include("connect.php");



mysql_query("INSERT INTO registered_customer.accounts_emp (id_no,date_reg,fname,mname,sname,position,email,contact,username,password) VALUES('".$_POST['id_no']."','".$_POST['date_reg']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['sname']."','".$_POST['position']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['username']."','".$_POST['password']."')");

header("location: log_employee.php");

mysql_close($dbconnection);
?>