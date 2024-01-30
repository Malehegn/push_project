<?php session_start();?>
<?php
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}

 ?>
<?php
require("db.php");
$id =$_REQUEST['majorID'];

$result = mysql_query("SELECT * FROM major WHERE majorID  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$progtittle=$test['programId'] ;
				$nmajor=$test['major'] ;					
				$majdate=$test['dateadded'] ;

if(isset($_POST['editmajor']))
{	
	$progtittle_save = $_POST['program'];
	$nmajor_save = $_POST['newmajor'];
	$majdate_save = $_POST['majdateadd'];

	mysql_query("UPDATE major SET programId ='$progtittle_save', major ='$nmajor_save',
		 dateadded ='$majdate_save' WHERE majorID = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: view_major.php");			
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
<title>Add New Major</title>

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
		  <h1> Add New Major </h1>
		  <table border="0" >
		  	<tr>
				<td>Program:</td>
				<td>
					<select name="program" style="width: 148px;">
						<option><?php echo $progtittle ?></option>
						 <?php
		  		include ("db.php");
				$result = mysql_query("SELECT * FROM program ORDER BY programId");
				while($test = mysql_fetch_array($result))
				{
				if (!$result)
					{
					die("Error: Data not Found. . ");
					}
				echo "<option value=".$test['programId'].">".$test['programtitle']."</option>";
				}
					mysql_close($conn);
				 ?>
					</select>
				</td>				
			</tr>
			<tr>
				<td>Major:</td>
				<td><input type="text" name="newmajor" value="<?php echo $nmajor ?>"/></td>				
			</tr>
			<tr>
				<td>Date Added:</td>
				<td><input type="text" name="majdateadd" id="datepicker" value="<?php echo $majdate ?>"/></td>				
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="editmajor" value="Add" class="btn" /></td>				
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