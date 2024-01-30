<?php
  include("db.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysql_query("DELETE FROM notification WHERE id = '$id'")
	or die(mysql_error());  	
	
	header("Location: delete_notification.php");
?>