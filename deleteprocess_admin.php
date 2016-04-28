<?php

include("connect.php");

mysql_query("DELETE FROM registered_customer.reservation WHERE id = '".$_GET['id']."' ");

header("location: adminpage.php");

mysql_close($dbconnection);

?>