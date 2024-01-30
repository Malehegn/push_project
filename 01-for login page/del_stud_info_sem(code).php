<?php
  include("db.php");  

	$id =$_REQUEST['studsemtempID'];
	
	
	// sending query
	mysql_query("DELETE FROM studsemtemp WHERE studsemtempID = '$id'")
	or die(mysql_error());  	
	
	header("Location: add_stud_info_course.php");
?>