<?php
require("db.php");
$id =$_REQUEST['courseID'];

$result = mysql_query("SELECT * FROM course WHERE courseID='$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}						
			 		$prog=$test['program'] ;
					$major=$test['major'] ;
					$year=$test['yearlevel'] ;
					$sem=$test['semester'] ;
					$course=$test['coursetitle'] ;
					$pre=$test['prerequesit'] ;
					$coursedesc=$test['coursedescription'] ;
					$hrs=$test['hrsperweek'] ;
					$unit= $test['unit'] ;
					$date=$test['dateadded'];				
					
				

if(isset($_POST['done']))
{	
					$prog_save=$_POST['program'] ;
					$major_save=$_POST['major'] ;
					$year_save=$_POST['year'] ;
					$sem_save=$_POST['semester'] ;
					$course_save=$_POST['coursecode'] ;
					$pre_save=$_POST['prereq'] ;
					$coursedesc_save=$_POST['coursedesc'] ;
					$hrs_save=$_POST['hrsweek'] ;
					$unit_save= $_POST['units'] ;
					$date_save= $_POST['coursedateadd'];				
					
	

	mysql_query("UPDATE course SET 	program ='$prog_save', major ='$major_save', yearlevel ='$year_save', semester ='$sem_save', 						coursetitle ='$course_save', prerequesit ='$pre_save', coursedescription ='$coursedesc_save', hrsperweek ='$hrs_save', unit ='$unit_save',									dateadded='$date_save',	WHERE courseID = '$id'")
				or die(mysql_error());
	
	header("Location: view_course.php");			
}
mysql_close($conn);
?>