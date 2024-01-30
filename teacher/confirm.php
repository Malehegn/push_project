<?php
  include("db.php");  

	$id =$_REQUEST['id'];

	mysql_query("UPDATE report SET status='1' WHERE id = '$id'")
	or die(mysql_error());  	
	
	header("Location: viewprob.php");
?>