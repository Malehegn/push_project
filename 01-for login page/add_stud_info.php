<?php session_start();?>
<?php
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html >
<html>
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
	
<script type="text/javascript" >
			 function noMore(){
			
				
				 $gen=document.getElementById("gen").value;
				
				 $dep=document.getElementById("dep").value;
				 
			
				if($dep == '--Select Department--'){
					 alert("Please choose Department !!!");
					
					 return false;
				 }
				 else if($gen == '---Select Gender---'){
					 alert("Please choose gender !!!");
					
					 return false;
				 }

			
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
		$( "#date" ).datepicker({		 
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
<title>Add students Information</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_container">
	<div id="nav">
    	<?php include('include/header.php')?>
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
   	  <div id="templatemo_special_offers" style="margin-left: 650px; margin-top: 85px; width: 254px;">
   	    <p align="center" class="style4">Welcome </p>
       	  <p align="center" class="style4">Administrator</p>
       	 
   	  </div>
  </div>
    <!-- end of header -->
    
    <div id="templatemo_content">
      <!-- end of content left -->
<div id="templatemo_content_right">
       	  <form id="form1" name="form1" method="post" action="addstudcode.php" enctype='multipart/form-data'>
		  <br />
		  <h1>Add Student's Information</h1>
		  	<table border="0" style="margin-left: -124px;">
				<tr>
					<td width="94">ID Number</td>
					<td><input type="text" name="idnum" onKeyPress="return isNumberKey(event)" required /></td>
					<td>&nbsp;</td>
					<td>Password</td>
					<td><input type="password" name="password" required /></td>
				</tr>
				<tr>
					<td>Contact Number</td>
					<td><input type="text" name="contact" maxlength="10" onKeyPress="return isNumberKey(event)" required /></td>
					<td>&nbsp;</td>
					<td>Upload Photo</td>
					<td>
						<input type="file" accept="image/jpeg, image/gif" name="image" id="name" required />
					</td>					
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
					<td style="width: 100px;">Name</td>
					<td><input type="text" name="frstname" required /></td>
					<td>&nbsp;</td>
					<td><input type="text" name="mname" required /></td>
					<td>&nbsp;</td>
					<td><input type="text" name="lname" required /></td>
					
					
				</tr>
			</table>
			<table border="0" style="margin-left: -124px;">
				<tr>
					<td>Address</td>
					<td><input name="address" type="text" size="74" required /></td>
				</tr>
				<tr>
					<td>Parent/Guardian</td>
					<td><input type="text" name="pguardian" size="58" required /></td>
				</tr>
			</table>
				<table border="0" style="margin-left: -124px;">				
				<tr>
				
					<td style="width: 95px;">Gender</td>
					<td>
						<select style="width: 170px;" name="gender" id="gen">
							<option>---Select Gender---</option>
							<option>Male</option>
							<option>Female</option>
						</select>					
					</td>
					<td>&nbsp;</td>
					<td>Date Of Birth</td>
					<td><input type="text" name="dob" id="datepicker" required /></td>					
				</tr>
				<tr>					
					<td>Place Of Birth</td>
					<td><input type="text" name="pob" required /></td>
					<td>&nbsp;</td>
					<td>Position</td>
					<td>
						<select name="position">
							<option style="width: 120px;">Student</option>
													
						</select>		
					</td>
					</tr>
					<td>Date Added</td>					
					<td><input name="d" type="text" id="date"/></td>
					<td>&nbsp;</td>
							
					</td>
								<td>Department:</td>
		<td>
					<select  name="department" id="dep" style="width: 148px;">
						  <option>--Select Department--</option>
					<?php
		  		include ("db.php");
				$id =$_SESSION['userid'];
						
				$sql = mysql_query("SELECT * FROM department");
				while($testd = mysql_fetch_array($sql))
				{
				if (!$testd)
					{
					die("Error: Data not Found. . ");
					}
				
				echo "<option value=".$testd['depID'].">".$testd['depName']."</option>";
				}
					mysql_close($conn);
				 ?>
					  </select>
		</td>
		<td>&nbsp;</td>
					</tr>
					
				
			</table>
			
			
			
			<table border="0" style="margin-left: -124px;">
			
		
			<tr>
				<td width="94">&nbsp;</td>
				<td width="180"><div align="center">School</div></td>
				<td width="250"><div align="center">Address</div></td>
				<td><div align="center">School Year</div></td>
			</tr>
			<tr>
				<td>Elementary</td>
				<td><input name="eschool" type="text"  style="width: 180px;" required/></td>
				<td><input name="eaddress" type="text"  style="width: 250px;" required/></td>
				<td><input name="esy" type="text" maxlength="4" onKeyPress="return isNumberKey(event)" required /></td>
			</tr>
			<tr>
				<td>Secondary</td>
				<td><input name="sschool" type="text"  style="width: 180px;" required /></td>
				<td><input name="saddress" type="text"  style="width: 250px;" required /></td>
				<td><input name="ssy" type="text"  maxlength="4" onKeyPress="return isNumberKey(event)" required /></td>
			</tr>
			<!-- <tr>
				<td>Tertiary</td>
				<td><input name="tschool" type="text"  style="width: 180px;"/></td>
				<td><input name="taddress" type="text"  style="width: 250px;"/></td>
				<td><input name="tsy" type="text" /></td>
			</tr> -->
			</table>
			<table border="0" style="margin-left: -124px;">
				<tr>
					
					<td>&nbsp;</td>
					<td><input name="addstudinfo" type="submit" value="Submit" onclick = "return noMore()" class="btn" /></td>
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
