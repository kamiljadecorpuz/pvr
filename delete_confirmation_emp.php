<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<script> 
	function myFunction() {
    var x;
    if (confirm(prompt('Do you want to permanently delete the selected info? Please confirm: Authorized Staff only')) == true) {
        x = window.location = 'deleteprocess_reservation_emp.php';
    } else {
        x = window.location = 'login.php';
    }
        document.getElementById("id").innerHTML = x;
}
	
	
	/*
	prompt('Do you want to permanently delete the selected info? Please confirm: Authorized Staff only'); 
window.location = 'login.php';*/
</script>
	

</body>
</html>