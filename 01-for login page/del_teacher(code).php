<?php
  include("db.php");  

	$id =$_REQUEST['teacherid'];
	
	
	// sending query
	mysql_query("DELETE FROM teacher WHERE teacherid = '$id'")
	or die(mysql_error());  	
	
	header("Location: delete_teacher.php");
?>