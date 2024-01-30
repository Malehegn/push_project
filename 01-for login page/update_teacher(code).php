<?php session_start();?>
<?php
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}

 ?>
<?php
require("db.php");
$id =$_REQUEST['teacherid'];

$result = mysql_query("SELECT * FROM teacher WHERE teacherid  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
					
					$username=$test['UserName'] ;
					$password=$test['password'] ;
					$contactnum=$test['contactnum'] ;
					$lastname=$test['lastname'] ;
					$firstname= $test['firstname'] ;					
					$middlename=$test['middlename'] ;
					$address=$test['address'] ;
					

if(isset($_POST['editteacher']))
{	
	
	$user_save = $_POST['UserName'];
	$pass_save = $_POST['password'];
	$contact_save = $_POST['contactnum'];
	$last_save = $_POST['lastname'];
	$first_save = $_POST['firstname'];
	$middle_save = $_POST['middlename'];
	$address_save = $_POST['address'];

	mysql_query("UPDATE teacher SET	 UserName ='$user_save', password ='$pass_save', 
	contactnum ='$contact_save', lastname = '$last_save', firstname= '$first_save', middlename= '$middle_save', address='$address_save' WHERE teacherid = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: view_teacher.php");			
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
<title>update teacher</title>

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
		  <h1> Edit Teacher </h1>
		   <?php
	   include('db.php');
	   $teacherid=$_REQUEST['teacherid'];
	   
	   $uh=mysql_query("SELECT * FROM teacher WHERE teacherid='$teacherid'");
	   $eh = mysql_fetch_array($uh);
	   $aydee=$eh['teacherid'];
	    ?>
	 <div style="float:left">
	 	<table border="1" style="margin-left: -118px;">
		<tr><td><?php echo "<img src='images/photos/".$eh['upload']."' height='156' width='190' />"; ?></td></tr>
		</table>
	 </div>
		  <table border="0">
		  	
			<tr>
				<td width="115">ID Number:</span></td>
				<td><input type="text" name="UserName" onkeypress ="return isNumberKey(event)" value="<?php echo $username ?>" required /></td>
				
			</tr>
		</table>
		<table>
			<tr>
				<td width="115">Password:</span></td>
				<td><input type="text" name="password" value="<?php echo $password ?>" required /></td>
			</tr>
		</table>
		<table>
			<tr>
				<td width="115">Contact No:</span></td>
				<td><input type="text" name="contactnum" maxlength="10" onkeypress="return isNumberKey(event)" value="<?php echo $contactnum ?>" required /></td>
			
			</tr>
			<tr>
				<td width="115">First Name:</span></td>
				<td><input type="text" name="firstname"  value="<?php echo $firstname ?>" required /></td>	
				<td>&nbsp;</td>
					
			</tr>
			<tr>
				<td>Middle Name</span></td>
				<td><input type="text" name="middlename" value="<?php echo $middlename ?>" required /></td>	 
							
			</tr>
			<tr>
			
				<td width="97"> Last Name:</span></td>
				<td><input type="text" name="lastname" value="<?php echo $lastname ?>" required /></td> 
			<tr>
				<td width="97"> Address:</span></td>
				<td><input type="text" name="address" value="<?php echo $address ?>" required /></td>
			</tr>
			</tr>
			<tr></tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="editteacher" value="Save" class="btn"/></td>	
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