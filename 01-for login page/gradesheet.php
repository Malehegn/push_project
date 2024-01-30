<?php session_start();?>
<?php
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}

 ?>
<!DOCTYPE html >
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Grade Sheet</title>

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
	   <h1> GRADE SHEET </h1>
	  <form method="post" action="printgradesheet.php">
	  <table>
	  <tr>
		<td>School Year:</td>
		<td><input type="text" name="schyr" /></td>
	  	<td>&nbsp;</td>
			<td>Program:</td>
			<td>
				<select  name="prog" style="width: 148px;">
						  <option>---Select Program---</option>		
						  <?php
						  		include ("db.php");
								$result = mysql_query("SELECT * FROM program");
								while($test = mysql_fetch_array($result)){
							?>
								
						  <option>
						  <?php $id = $test['programId'];echo $test['programtitle'];?>           
						  </option>
						  <?php }
							mysql_close($conn);
							 ?>
					  </select>
			</td>
		</tr>
	  <tr>
		<td>Course:</td>
		<td>
					<select  name="course" style="width: 148px;">
						  <option>---Select Course---</option>
					<?php
		  		include ("db.php");
				$result = mysql_query("SELECT * FROM course ORDER BY courseID");
				while($test = mysql_fetch_array($result))
				{
				if (!$result)
					{
					die("Error: Data not Found. . ");
					}
				echo "<option value=".$test['courseID'].">".$test['coursetitle']."</option>";
				}
					mysql_close($conn);
				 ?>
					  </select>
		</td>
		<td>&nbsp;</td>
		<td>Section:</td>
				<td>
					<select name="sec">
					<option>--Select Section--</option>
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
					
				</select>
				</td>		
		</tr>
		<tr>
				<td>Year:</td>
				<td>
					<select name="year" style="width: 148px;">
						<option>---Select Year---</option>
						<option>I</option>
						<option>II</option>
						<option>III</option>
						<option>IV</option>
				
					</select>
				</td>						
				<td>&nbsp;</td>
				<td>Semester</td>
				<td>
					<select name="semester" style="width: 148px;">
						<option>---Select Semester---</option>
						<option>1st Semester</option>
						<option>2nd Semester</option>
											
					</select>
				</td>		
			</tr>
		<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="CLICK HERE TO FILTER" name="sheet" class="btn" /></td>
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