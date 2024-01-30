<?php
  include("db.php");  

	$id =$_REQUEST['courseID'];
	
	
	// sending query
	mysql_query("DELETE FROM course WHERE courseID = '$id'")
	or die(mysql_error());  	
	
	header("Location: delete_course.php");
?>