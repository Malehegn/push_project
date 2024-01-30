<?php
  include("db.php");  

	$id =$_REQUEST['majorID'];
	
	
	// sending query
	mysql_query("DELETE FROM major WHERE majorID = '$id'")
	or die(mysql_error());  	
	
	header("Location: delete_major.php");
?>