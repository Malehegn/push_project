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
	<script type="text/javascript" >
			 function noMore(){
			
				 $year=document.getElementById("yr").value;
				 $sem=document.getElementById("sem").value;
				
			 $co=document.getElementById("co").value;
				 	 $teach=document.getElementById("teach").value;
			
			
				 if($year == ''){
					 alert("Please choose fill year section!!!");
					
					 return false;
				 }
				   else if($sem == '---Select Semister---'){
					 alert("Please choose Semister !!!");
					
					 return false;
				 }
				  else if($co == '---Select Course---'){
					 alert("Please select one course !!!");
					
					 return false;
				 }
				   else if($teach == '---Select Teacher---'){
					 alert("Please select one Teacher !!!");
					
					 return false;
				 }
				
			
				 return true;
			 }
			 </script>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assign course</title>

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
       	  <form id="form1" name="form1" method="post" >
		  <h1> Assign existing course for teacher </h1>          
		  <table border="0">
		   <tr>
          	 <td width="115"><span class="style7">Year:</span></td>
              <td><input type="text" name="year" id="yr" maxlength="4" onKeyPress="return isNumberKey(event)" required /></td>
            </tr>
			<tr>
			<td width="115"><span class="style7">Semister:</span></td>
			 <td>
              <select  name="sem" id="sem" style="width: 172px;">
			   <option>---Select Semister---</option>
			  <option> 1st Semister </option>
			  <option> 2nd Semister </option>
			  </select>
			  </td>
			 
              
            </tr>
            <tr> 
			<td width="115"><span class="style7">Course ID:</span></td>
			<td>
              			<select  name="course" id="co" style="width: 172px;">
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
					  </select> </td>
            </tr>
          </table>
		  <table>
			<tr>
				<td width="115"><span class="style7">Teacher Name:</span></td>
				<td>
              			<select  name="teacherid" id="teach" style="width: 172px;">
						  <option>---Select Teacher---</option>
					<?php
		  		include ("db.php");
				$resulta = mysql_query("SELECT * FROM teacher ORDER BY teacherid");
				while($testa = mysql_fetch_array($resulta))
				{
				if (!$resulta)
					{
					die("Error: Data not Found. . ");
					}
				echo "<option value=".$testa['teacherid'].">".$testa['firstname']."&nbsp;".$testa['middlename']."</option>";
				}
					mysql_close($conn);
				 ?>
					  </select> </td>
			</tr>
		</table>
		<table>
		
			
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="assigncourse" onclick ="return noMore()" value="Assign" class="btn"/></td>				
			</tr>
		  </table>
	
		  </form>  
<?php
if (isset($_POST['assigncourse']))
	{	   
	include 'db.php';
	
			 	
					$course=$_POST['course'] ;
					$teacherid=$_POST['teacherid'] ;
					$semister=$_POST['sem'];
					$year=$_POST['year'];
												
		$sql="INSERT INTO tcourse(teacherid, courseID, schyr , semester)
VALUES ('$teacherid', '$course','$year','$semister' )";

if (!mysql_query($sql)) {
die('Error: ' . mysql_error($con));
}
echo              "<pre><b>ONE RECORD ADDED</b>";
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