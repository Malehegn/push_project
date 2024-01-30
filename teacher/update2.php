<?php
		include ("db.php");  
$size = count($_POST['mark']);
$sizes = count($_POST['remarks']);


$i = 0;
if(isset($_POST['btnupdate'])){	 
			
			


while ($i < $size ) {
	$courseid=$_POST['course'];
	$sem=$_POST['semester'];
	$schyr=$_POST['schyr'];
	$mark= $_POST['mark'][$i];	
	$id = $_POST['studSemID'][$i];
	//$dep =$_POST['depID'];
	
	/*	$resultd=mysql_query("SELECT * FROM department WHERE depID ='$dep'");
while($testd = mysql_fetch_array($resultd))
				{
				if (!$testd)
					{
					die("Error: Data not Found. . ");
					}
					$depid=$testd['depID'];
				
				} */
	
	$result1=mysql_query("SELECT * FROM course WHERE courseID ='$courseid'");
while($test1 = mysql_fetch_array($result1))
				{
				if (!$test1)
					{
					die("Error: Data not Found. . ");
					}
					$ects=$test1['hrsperweek'];
				
				}
	$result = mysql_query("SELECT * FROM persection where studentID='$id' ");
while($test = mysql_fetch_array($result))
				{
				if (!$test)
					{
					die("Error: Data not Found. . ");
					}
					$year=$test['year'];
				$section=$test['section'];
				$dep=$test['depID'];
				}
	//$year1=$_POST['year2'][$i];
	if ($mark>=90){
		$gp=$ects*4;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','A+','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=85){
		$gp=$ects*4;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','A','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=80){
		$gp=$ects*3.75;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','A-','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=75){
		$gp=$ects*3.5;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','B+','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=70){
		$gp=$ects*3;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','B','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=65){
		$gp=$ects*2.75;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','B-','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=60){
		$gp=$ects*2.5;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','C+','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=50){
		$gp=$ects*2;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','C','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=45){
		$gp=$ects*1.75;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','C-','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=40){
		$gp=$ects*1;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','D','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=35){
		$gp=$ects*0;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','Fx','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	else {
		$gp=$ects*0;
	$query = "INSERT INTO studsem(studentID,schyr,sem,year,section,depID,courseid,ects,mark,grades,gradepnt) 
	VALUES ('$id','$schyr','$sem','$year','$section','$dep','$courseid','$ects','$mark','F','$gp' )";
		mysql_query($query) or die ("Error in query: $query");
	}
	mysql_query('TRUNCATE TABLE tempo;')
	or die(mysql_error());
		++$i;	
				header("location: grade_success.php");
} }
if (isset($_POST['calculate'])){	 
		
while ($i < $size ) {
		$mark= $_POST['mark'][$i];	
	$id = $_POST['studSemID'][$i];

		$dep =$_POST['depID'];	
//$sizes = count($_POST['remarks']);




	if ($mark>=90){
		$gp=$ects*4;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','A+','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=85){
		$gp=$ects*4;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','A','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=80){
		$gp=$ects*3.75;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','A-','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=75){
		$gp=$ects*3.5;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','B+','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=70){
		$gp=$ects*3;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','B','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=65){
		$gp=$ects*2.75;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','B-','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=60){
		$gp=$ects*2.5;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','C+','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=50){
		$gp=$ects*2;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','C','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=45){
		$gp=$ects*1.75;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','C-','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=40){
		$gp=$ects*1;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','D','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else if($mark>=35){
		$gp=$ects*0;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','Fx','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
	else {
		$gp=$ects*0;
	$query = "INSERT INTO tempo(studentID,mark,grade,depID) 
	VALUES ('$id','$mark','F','$dep')";
		mysql_query($query) or die ("Error in query: $query");
	}
				
		++$i;
				header("location: persection.php");
} }
	mysql_close($conn);
	
	  ?>
		