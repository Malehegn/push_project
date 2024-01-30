<?php
  include("db.php");  

	$id =$_REQUEST['id'];

	mysql_query("DELETE FROM report WHERE id = '$id'")
	or die(mysql_error());  	
	
	header("Location: problem.php");
?>