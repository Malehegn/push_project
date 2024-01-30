<?php
  include("db.php");  

	$id =$_REQUEST['programId'];
	
	
	// sending query
	mysql_query("DELETE FROM program WHERE programId = '$id'")
	or die(mysql_error());  	
	
	header("Location: delete_prog.php");
?>