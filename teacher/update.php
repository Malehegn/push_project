<?php
			 
			include("db.php");

$size = count($_POST['mid']);
//$sizes = count($_POST['remarks']);


$i = 0;
while ($i < $size) {
	$mid= $_POST['mid'][$i];
//	$end= $_POST['end'][$i];
//	$grades= $_POST['grades'][$i];
//	$remarks= $_POST['remarks'][$i];	
	$id = $_POST['studSemID'][$i];
	
	$query = "UPDATE studsem SET mid = '$mid' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
			++$i;
				header("location: reciept.php");
}

	mysql_close($conn);
	
	  ?>
		