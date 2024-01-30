<?php session_start();?>
<?php
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}

 ?>
<?php
require("db.php");
$id =$_REQUEST['programId'];

$result = mysql_query("SELECT * FROM program WHERE programId  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$progtittle=$test['programtitle'] ;
				$progdescription= $test['programdescription'] ;					
				$progdate=$test['dateadded'] ;

if(isset($_POST['btnsave']))
{	
	$progtittle_save = $_POST['progti'];
	$progdescription_save = $_POST['progdesc'];
	$progdate_save = $_POST['progdateadde'];

	mysql_query("UPDATE program SET programtitle ='$progtittle_save', programdescription ='$progdescription_save',
		 dateadded ='$progdate_save' WHERE programId = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: view_prog.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html >
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Program</title>

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
       	  <form method="post"  action="">
		  <h1> Edit Program</h1>
		  <table border="0" >
		  	<tr>
				<td>Program Title:</td>
				<td><input type="text" name="progti" value="<?php echo $progtittle ?>"/></td>				
			</tr>
			<tr>
				<td>Program Description:</td>
				<td><input type="text" name="progdesc" style="width:229px" value="<?php echo $progdescription ?>"/></td>				
			</tr>
			<tr>
				<td>Date Added:</td>
				<td><input type="text" name="progdateadde" value="<?php echo $progdate ?>"/></td>				
			</tr>
			<tr>
				<td>&nbsp;</td>
				
				<td><input type="submit" name="btnsave" value="Save" class="btn" /></td>				
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