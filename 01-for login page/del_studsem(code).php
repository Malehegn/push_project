<?php
  include("db.php");  

	$id =$_REQUEST['studSemID'];
	
	
	// sending query
	mysql_query("DELETE FROM studsem WHERE studSemID = '$id'")
	or die(mysql_error());  	
	
	header("Location: add_stud_info_course.php");
?>