<?php
  include("db.php");  

	$id =$_REQUEST['studentID'];
	
	
	// sending query
	mysql_query("DELETE FROM student WHERE studentID = '$id'")
	or die(mysql_error());  	
	
	header("Location: delete_student.php");
?>