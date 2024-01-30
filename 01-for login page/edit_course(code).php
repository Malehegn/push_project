<?php session_start();?>
<?php
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}

 ?>
<?php
require("db.php");
$id =$_REQUEST['courseID'];

$result = mysql_query("SELECT * FROM course WHERE courseID  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
					
					$course=$test['coursetitle'] ;
					$pre=$test['prerequesit'] ;
					$coursedesc=$test['coursedescription'] ;
					$hrs=$test['hrsperweek'] ;
					$unit= $test['unit'] ;					
					$date=$test['dateadded'] ;

if(isset($_POST['editcourse']))
{	
	
	$course_save = $_POST['coursecode'];
	$pre_save = $_POST['prereq'];
	$coursedesc_save = $_POST['coursedesc'];
	$hrs_save = $_POST['hrsweek'];
	$unit_save = $_POST['units'];
	$date_save = $_POST['coursedateadd'];

	mysql_query("UPDATE course SET	 coursetitle ='$course_save', coursedescription ='$coursedesc_save', 
	hrsperweek ='$hrs_save', dateadded ='$date_save' WHERE courseID = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: view_course.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html >
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta charset="utf-8">
		
	<link rel="stylesheet" href="jquery-ui/development/themes/base/jquery.ui.all.css">
	
	<script src="jquery-ui/development/jquery-1.5.1.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.core.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.widget.js"></script>
	<script src="jquery-ui/development/ui/jquery.ui.datepicker.js"></script>
	<link rel="stylesheet" href="jquery-ui/development/demos/demos.css">
			<script language="javascript" >
 function isNumberKey(evt)
 {
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))
return false;
return true;
 }  
</script>
	
	<script>
	$(function() {
		$( "#datepicker" ).datepicker({
			changeMonth: true,
			dateFormat: 'yy-mm-dd',
			changeYear: true,
			showButtonPanel: true
		});
	});
	</script>
	
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Course</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />


</head>
<body>


<div id="templatemo_container">
	<div id="nav">
    	<?php include('include/header.php')?>
    </div><!-- end of menu -->
    
    <div id="templatemo_header">
   	  <div id="templatemo_special_offers" style="margin-left: 650px; margin-top: 85px; width: 254px;">
   	    <p align="center" class="style4">          Welcome </p>
       	  <p align="center" class="style4">Administrator    	        </p>
   	  </div>
  </div>
    <!-- end of header -->
    
    <div id="templatemo_content">
      <!-- end of content left -->
<div id="templatemo_content_right">
       	  <form id="form1" name="form1" method="post" action="">
		  <h1> Edit Course </h1>
		  <table border="0">
		  	
			<tr>
				<td width="115">Course Code:</span></td>
				<td><input type="text" name="coursecode" value="<?php echo $course ?>"/></td>
				
			</tr>
		</table>
		<table>
			<tr>
				<td width="115">Course Description:</span></td>
				<td><input type="text" name="coursedesc" size="64" value="<?php echo $coursedesc ?>" /></td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="115">Hours/Week:</span></td>
				<td><input type="text" name="hrsweek" maxlength ="2" onkeypress ="return isNumberKey(event)" value="<?php echo $hrs ?>"/></td>
				<td>&nbsp;</td>
				<!--<td width="97"> Units:</span></td>
				<td><input type="text" name="units" value="<?php echo $unit ?>"/></td> -->
			</tr>
			<tr>
				<td width="115">Date Added:</span></td>
				<td><input type="text" name="coursedateadd" id="datepicker" value="<?php echo $date ?>"/></td>	
				<td>&nbsp;</td>
				<!--<td>Pre-Requesit</span></td>
				<td><input type="text" name="prereq" value="<?php echo $pre ?>"/></td>	 -->		
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="editcourse" value="Save" class="btn"/></td>				
			</tr>
		  </table>
		  </form>      
</div> 
	
        <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
  </div> <!-- end of content -->
    
    <div id="templatemo_footer">
      <?php include('include/footer.php')?>
  </div> 
    <!-- end of footer -->

</div> <!-- end of container -->
</body>
</html>