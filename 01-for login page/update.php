<?php
			 
			include("db.php");

$size = count($_POST['mark']);
//$sizes = count($_POST['remarks']);


$i = 0;
while ($i < $size ) {
	
	
	$mark= $_POST['mark'][$i];
	//$remarks= $_POST['remarks'][$i];	
	$id = $_POST['studSemID'][$i];
	$ects=$_POST['ects'][$i];
	
if ($mark >= 90){
	$gradepnt=$ects*4;
	//$grade=A+;

	$query = "UPDATE studsem SET mark = '$mark', grades='A+', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		
		}
		else if ($mark >=85){
			$gradepnt=$ects*4;
			$query = "UPDATE studsem SET mark = '$mark', grades='A', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			else if ($mark >=80){
			$gradepnt=$ects*3.75;
			$query = "UPDATE studsem SET mark = '$mark', grades='A-', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			else if ($mark >=75){
			$gradepnt=$ects*3.5;
			$query = "UPDATE studsem SET mark = '$mark', grades='B+', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			else if ($mark >=70){
			$gradepnt=$ects*3;
			$query = "UPDATE studsem SET mark = '$mark', grades='B', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			else if ($mark >=65){
			$gradepnt=$ects*2.75;
			$query = "UPDATE studsem SET mark = '$mark', grades='B-', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			else if ($mark >=60){
			$gradepnt=$ects*2.5;
			$query = "UPDATE studsem SET mark = '$mark', grades='C+', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			else if ($mark >=50){
			$gradepnt=$ects*2;
			$query = "UPDATE studsem SET mark = '$mark', grades='C', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			else if ($mark >=45){
			$gradepnt=$ects*1.75;
			$query = "UPDATE studsem SET mark = '$mark', grades='C-', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			else if ($mark >=40){
			$gradepnt=$ects*1;
			$query = "UPDATE studsem SET mark = '$mark', grades='D', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			else if ($mark >=35){
			$gradepnt=$ects*0;
			$query = "UPDATE studsem SET mark = '$mark', grades='Fx', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			else {
			$gradepnt=$ects*0;
			$query = "UPDATE studsem SET mark = '$mark', grades='F', gradepnt= '$gradepnt', remarks = '$remarks' WHERE studSemID = '$id' LIMIT 1";
		mysql_query($query) or die ("Error in query: $query");
		}
			++$i;
				header("location: sample.php");
}

	mysql_close($conn);
	
	  ?>
		