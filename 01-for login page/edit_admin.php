<?php session_start();?>
<?php
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}

 ?>
<?php
require("db.php");
$id =$_REQUEST['adminID'];

$result = mysql_query("SELECT * FROM admin WHERE adminID  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				
				$UserName=$test['UserName'] ;					
				$Password=$test['Password'] ;

if(isset($_POST['editadmin']))
{	
	
	$UserName_save = $_POST['UserName'];
	$Password_save = $_POST['Password'];

	mysql_query("UPDATE admin SET  UserName ='$UserName_save',
		 Password ='$Password_save' WHERE adminID='$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: view_admin.php");			
}
mysql_close($conn);
?>
<!DOCTYPE html >
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Admin User</title>

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
<form method="post">
	<table>
		<tr>
			<td>UserName:</td>
			<td><input type="text" name="UserName" value="<?php echo $UserName ?>"/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="Password" value="<?php echo $Password ?>"/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="editadmin" value="ADD New User" class="btn" /></td>
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