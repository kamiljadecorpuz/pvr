<html>
<head>
  <title>Student Evaluation</title>
</head>
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<body>
<?php
        include("connect.php");

		if(isset($_GET["id"])){
			$insert = $_GET["id"];
			$query = mysql_query("SELECT * FROM registerd.student_info WHERE id = '".$insert."'");
			
			$row = mysql_fetch_array($query);
		}
	
		
        
    ?>
  <center>

    <h1>Student Evaluation</h1>
    <input name="id" type="hidden" value="<?php echo $row['id']; ?>"><br>
    <table>
      <tr> <td><b>Last Name:</td> <td><input type="text" disabled class="form-control" value="<?php echo $row['lastname']; ?>"></input></td></tr>
      <tr> <td><b>First Name:</td> <td><input type = "Text" disabled class="form-control" value="<?php echo $row['firstname']; ?>"></input></td></tr>
      <tr> <td><b>Middle Name:</td> <td><input type = "Text" disabled class="form-control" value="<?php echo $row['middlename']; ?>"></input></td></tr>
    </table>

    <br>
    <br>

    <table>
	
      <th>Student Number: <td><input type = "text" class="form-control" value="<?php echo $row['studentnumber']; ?>"disabled></input></td> </th>
      <tr><td><b>Course:</td> <td><input type = "Text" class="form-control" value="<?php echo $row['course']; ?>"disabled></input></td> </tr>
      <tr><td><b>Year:</td> <td><input type = "Text" class="form-control" value="<?php echo $row['year']; ?>"disabled></input></td> </tr>
      <tr><td><b>semester:</td> <td><input type = "Text" class="form-control" value="<?php echo $row['semester']; ?>"disabled></input></td> </tr>
      <tr><td><b>Section:</td> <td><input type = "Text" class="form-control" value="<?php echo $row['section']; ?>"disabled></input></td> </tr>
      <tr><td><b>School year:</td> <td><input type="text" class="form-control" name="Gender" value="<?php echo $row['schoolyear']; ?>"disabled></td> </tr>
      <tr><td><b>Date Enroll:</td> <td><input type="text" class="form-control" value="<?php echo $row['dateenroll']; ?>"disabled></td></tr>
    </table>

    <br>
    <br>

    <table>
      <th>Subject Code <td><b>Subject Description</td> <td><b>Unit</td> <td><b>Final Grade</td><td><b>Professor</td>
      <tr><td><input type = "Text" value="<?php echo $row['subjectcode']; ?>" class="form-control" disabled></input></td> 
	  <td><input type = "Text" value="<?php echo $row['subjectdescription']; ?>" class="form-control" disabled></input></td>
	  <td><input type = "Text" value="<?php echo $row['unit']; ?>" class="form-control" disabled></input></td>
	  <td><input type = "Text" value="<?php echo $row['finalgrade']; ?>" class="form-control" disabled></input></td>
	  <td><input type = "Text" name="professor" value="<?php echo $row['professor']; ?>" class="form-control" disabled ></input></td> </tr>
	  
     
    </table>

	                </tbody>
              </table>
				<br>
              <a href="tables.php">Back</a>
        
	
  </center>
</body>
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</html>