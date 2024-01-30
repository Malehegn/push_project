<?php session_start();?>
<?php
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html ">

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
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Teacher: Step 1</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

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
	  
	  
	  <form method="post"  action="" enctype='multipart/form-data'>
		  <h1> Add New Teacher's Profile</h1>
		  <table border="0" style="margin-left: -124px;">
				<tr>
					<td width="94">ID Number</td>
					<td><input type="text" name="UserName" onKeyPress="return isNumberKey(event)" required /></td>
					<td>&nbsp;</td>
					<td>Password</td>
					<td><input type="password" name="password" required /></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" name="contact" maxlength="10" onKeyPress="return isNumberKey(event)" required /></td>
					<td>&nbsp;</td>
					<td>Upload Photo</td>					
					<td><input type="file" accept="image/jpeg, image/gif" name="image" id="file" required /></td>					
				</tr>
			</table>
			
		  <table border="0" style="margin-left: -124px;">
				<tr>
					<td>&nbsp;</td>
					<td><div align="center">First Name</div></td>
					
					<td>&nbsp;</td>
					<td><div align="center">Middle Name</div></td>
					<td>&nbsp;</td>
					<td><div align="center">Last Name</div></td>
					
				</tr>
				<tr>
					<td width="94">Name</td>
					<td><input type="text" name="frstname" required /></td>
					<td>&nbsp;</td>
					<td><input type="text" name="mname" required /></td>
					<td>&nbsp;</td>
					<td><input type="text" name="lname" required /></td>
				</tr>
			</table>
			
			<table border="0" style="margin-left: -124px;">
				<tr>
					<td width="94">Address</td>
					<td><input name="address" type="text" size="74" required /></td>
				</tr>
			</table>
			
			<table border="0" style="margin-left: -124px;">
				<tr>
					<td width="94">Position:</td>
					<td>
						<select name="position">
							<option style="width: 120px;">Teacher</option>
												
						</select>		
					</td>
					<td>&nbsp;</td>
					<td>Date Added</td>
					<td><input name="d" type="text" id="datepicker" required /></td>
				</tr>
				</table>
			
			<table>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="addteacher" value="Add" class="btn" /></td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table >
<?php


if (isset($_POST['addteacher']))
	{	   
	include 'db.php';
	
					
			 		$id=$_POST['UserName'] ;
					$pass= $_POST['password'] ;					
					$contact=$_POST['contact'] ;
					
					$lname=$_POST['lname'] ;
					$frstname=$_POST['frstname'] ;
					$mname=$_POST['mname'] ;
					$address=$_POST['address'] ;
					$position=$_POST['position'] ;
					$date=$_POST['d'] ;
					$schyr=$_POST['schyr'];
					$semester=$_POST['semester'];
					
					$name = $_FILES["image"] ["name"];
					$type = $_FILES["image"] ["type"];
					$size = $_FILES["image"] ["size"];
					$temp = $_FILES["image"] ["tmp_name"];
					$error = $_FILES["image"] ["error"];
											
					$row = mysql_query("INSERT INTO `teacher`(UserName,password,contactnum,upload,lastname,firstname,middlename,address,position,dateadded)
		 							 VALUES ('$id','$pass','$contact','$name','$lname','$frstname','$mname','$address','$position','$date')");
									 
					$hu_u = mysql_query("SELECT * FROM teacher WHERE UserName = '$id'");
					$hu_u_me = mysql_fetch_array($hu_u);
					$_SESSION['teacherid']=$hu_u_me['teacherid'];
		

									 
									 
							echo"One Record Successfully Added!";
							echo"<a href=add_teacher_info_step2.php>click here to next step</a>";
											
			if ($error > 0){
			die("Error uploading file! Code $error.");}
		else
		{
			if($size > 10000000000) //conditions for the file
			{
			die("Format is not allowed or file size is too big!");
			}
			else
			{
			move_uploaded_file($temp,"images/photos/".$name);
			}
		} 
							
				//header("Location: add_teacher_info_step2.php");				
	        
			}
			
?>	
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