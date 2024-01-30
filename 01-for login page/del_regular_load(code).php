<?php
  include("db.php");  

	$id =$_REQUEST['regularloadtempID'];
	
	
	// sending query
	mysql_query("DELETE FROM regularloadtemp WHERE regularloadtempID = '$id'")
	or die(mysql_error());  	
	
	header("Location: add_regular_load.php");
?>