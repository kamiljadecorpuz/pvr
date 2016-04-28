<?php

include("connect.php");

if(isset($_POST['sname']) && isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['position'])){
	
	if ($_POST['sname']!="" && $_POST['fname']!="" && $_POST['mname']!="" && $_POST['position'] !=""){
	

mysql_query("INSERT INTO registered_customer.careers (id,sname,fname,mname,position) VALUES ('".$_POST['id']."','".$_POST['sname']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['position']."')");

header("location: submit_successful.php");
mysql_close($dbconnection);
}

else{ header("location: submit_unsuccessful.php");
}
}


?>