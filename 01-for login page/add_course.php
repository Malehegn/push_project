<?php session_start();?>
<?php
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

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
	<script language="javascript" >
	 function isNumberKey(evt)
	 {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
	 }  
	</script>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Course</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style7 {
	font-family: "Times NewRoman";
	font-size: 15px;
	font-weight: regular;
}
.style14 {font-family: "Times NewRoman"; font-size: 15px; font-weight: regular; }
.style17 {font-family: "Times NewRoman"; font-size: 15px; font-weight: regular; }

-->
</style>

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
		  <h1> Add New Course </h1>          
		  <table border="0">
            <tr>
              <td width="115"><span class="style7">Course Code:</span></td>
              <td><input type="text" name="coursecode" required /></td>
            </tr>
          </table>
		  <table>
			<tr>
				<td width="115"><span class="style7">Course Description:</span></td>
				<td><input type="text" name="coursedesc" size="64" /></td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="115"><span class="style7">Hours/Week:</span></td>
				<td><input type="text" name="hrsweek" maxlength= "2" onKeyPress="return isNumberKey(event)" required /></td>

			</tr>
			<tr>
		
			</tr>
			<tr>
		
			</tr>
			<tr>
			
			
						
				<td width="115"><span class="style7">Date Added:</span></td>
				<td><input type="text" name="coursedateadd" id="datepicker" required /></td>			
			
			</tr>
			<tr> 
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="addcourse" value="Add" class="btn"/></td>				
			</tr>
		  </table>
		  <a href="assign_course.php">Assign existing course </a>
		  </form>  
<?php
if (isset($_POST['addcourse']))
	{	   
	include 'db.php';
	
			 		/*$prog=$_POST['program'] ;
					$major=$_POST['major'] ;
					$year=$_POST['year'] ;
					$sem=$_POST['semester'] ;*/
					$course=$_POST['coursecode'] ;
					$pre=$_POST['prereq'] ;
					$coursedesc=$_POST['coursedesc'] ;
					$hrs=$_POST['hrsweek'] ;
					$unit= $_POST['units'] ;					
					$date=$_POST['coursedateadd'] ;
												
		 mysql_query("INSERT INTO `course`(		 								   
										  
		 								   coursetitle,
										   prerequesit,
		 								   coursedescription,										   
										   hrsperweek,
										   unit,
										   dateadded
										   ) 
										   
		 							VALUES (
											
											'$course',
											'$pre',
											'$coursedesc',
											'$hrs',
											'$unit',
											'$date'
											)"); 
										
													echo "<h3 style='color:white'>One record successfully added ! <a style=color:redblue href=view_course.php>Click here !!!</a> </h3>";
											
				//header("Location: view_course.php");				
	        }
?>		  
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