<?php

include("connect.php");

mysql_query("DELETE FROM database.student_info WHERE id = '".$_POST['id']."' ");

header("location: tables.php");

mysql_close($dbconnection);

?>