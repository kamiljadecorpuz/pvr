<?php

include("connect.php");

$date_transaction = $_POST['date_transaction'];
$tot_ent = $_POST['tot_ent'];
$tot_pay = $_POST['tot_pay'];

if ($tot_pay != "" && $tot_ent != "" ) {
mysql_query("INSERT INTO registered_customer.reservation(id,date_today,datetime_today,id_resort,encoder,status,fname,mname,sname,contact,date_transaction,from_time,to_time,extended_hours,Medium_Cottage,Small_Cottage,Twin_Exotic,Single_Huts_Exotic,pavillion_day,pavillion_night,cottage_bbq_small,cottage_bbq_big,add_person_promo,payprocess,payment,adult,kids,total_entrants,tot_ent,tot_pay,cash_tendered,client_change) VALUES ('".$_POST['id']."','".$_POST['date_today']."','".$_POST['datetime_today']."','".$_POST['id_resort']."','".$_POST['encoder']."','".$_POST['status']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['sname']."','".$_POST['contact']."','".$_POST['date_transaction']."','".$_POST['from_time']."','".$_POST['to_time']."','".$_POST['extended_hours']."','".$_POST['Medium_Cottage']."','".$_POST['Small_Cottage']."','".$_POST['Twin_Exotic']."','".$_POST['Single_Huts_Exotic']."','".$_POST['pavillion_day']."','".$_POST['pavillion_night']."','".$_POST['cottage_bbq_small']."','".$_POST['cottage_bbq_big']."','".$_POST['add_person_promo']."','".$_POST['payprocess']."','".$_POST['payment']."','".$_POST['adult']."','".$_POST['kids']."','".$_POST['total_entrants']."','".$_POST['tot_ent']."','".$_POST['tot_pay']."','".$_POST['cash_tendered']."','".$_POST['client_change']."')");

header("location: welcomepage.php");

mysql_close($dbconnection);
}

else
{
	header("location: confirmation.php");
	}
?>