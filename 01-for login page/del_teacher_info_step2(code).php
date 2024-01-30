<?php
  include("db.php");  

	$id =$_REQUEST['tloadtempID'];
	
	
	// sending query
	mysql_query("DELETE FROM tloadtemp WHERE tloadtempID = '$id'")
	or die(mysql_error());  	
	
	header("Location: add_teacher_info_step2.php");
?>