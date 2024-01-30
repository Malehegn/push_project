<?php
			 
			include("db.php");
if(isset($_POST['calculate']))
				{
$size = count($_POST['mark']);
$sizes = count($_POST['remarks']);


$i = 0;
while ($i < $size ) {
	$courseid=$_POST['course'];
	$sem=$_POST['semester'];
	$schyr=$_POST['schyr'];
	$mark= $_POST['mark'][$i];	
	$id = $_POST['studSemID'][$i];
	$dep =$_POST['depID'];
	

	
				}
	//$year1=$_POST['year2'][$i];
	if ($mark>=90){
		$gp=$ects*4;
	$query = "INSERT INTO tempo(studentID,mark,grade,) 
	VALUES ('$id','$schyr''$mark','A+' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=85){
		$gp=$ects*4;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id''$mark','A' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=80){
		$gp=$ects*3.75;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id','$mark','A-' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=75){
		$gp=$ects*3.5;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id','$mark','B+' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=70){
		$gp=$ects*3;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id','$mark','B' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=65){
		$gp=$ects*2.75;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id','$mark','B-' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=60){
		$gp=$ects*2.5;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id','$mark','C+' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=50){
		$gp=$ects*2;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id','$mark','C')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=45){
		$gp=$ects*1.75;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id','$mark','C-' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=40){
		$gp=$ects*1;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id','$mark','D' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=35){
		$gp=$ects*0;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id','$mark','Fx' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else {
		$gp=$ects*0;
	$query = "INSERT INTO tempo(studentID,mark,grade) 
	VALUES ('$id','$mark','F' )";
		mysql_query($query) or die ("Error in query: $query");
	}
				
			++$i;
				header("location: persection.php");
}

	mysql_close($conn);
	
	  ?>
		