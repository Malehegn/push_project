<?php
  include("db.php");  

	$id =$_REQUEST['adminID'];

	mysql_query("DELETE FROM admin WHERE adminID = '$id'")
	or die(mysql_error());  	
	
	header("Location: view_admin.php");
?>