<?php
  include("db.php");  

	$id =$_REQUEST['tcoursetempID'];
	
	
	// sending query
	mysql_query("DELETE FROM tcoursetemp WHERE tcoursetempID = '$id'")
	or die(mysql_error());  	
	
	header("Location: add_teacher_info_step3.php");
?>