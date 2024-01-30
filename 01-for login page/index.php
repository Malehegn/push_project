<?php session_start(); ?>
<!DOCTYPE html>
<html>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$(".menu a").hover(function() {
		$(this).next("em").animate({opacity: "show", top: "-75"}, "slow");
	}, function() {
		$(this).next("em").animate({opacity: "hide", top: "-85"}, "fast");
	});


});
</script>

<style type="text/css">

.menu {
	margin: 0px 0 0;
	padding: 0;
	list-style: none;
}
.menu  {
	padding: 0;
	margin: 0 0px;
	float: left;
	position: relative;
	text-align: center;
}
.menu a {
	padding: 0px 0px;
	
	color: #000000;
	width: 0px;
	text-decoration: none;
	font-weight: bold;
	
}
.menu em {
	background: url(images/hover.png) no-repeat;
	width: 180px;
	height: 45px;
	position: absolute;
	color: #000000;
	top: -85px;
	left: -15px;
	text-align: center;
	padding: 20px 12px 10px;
	font-style: normal;
	z-index: 2;
	display: none;
}
</style>
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log-In for admin</title>
<link href="stylelog.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div id="layer01_holder">
	  <div id="left"></div>
	  <div id="center"></div>
	  <div id="right"></div>
	</div>
	
	<div id="layer02_holder">
	  <div id="left"></div>
	  <div id="center"></div>
	  <div id="right"></div>
	</div>
	
	<div id="layer03_holder">
	  <div id="left"></div>
	  <div id="center">
	  <table width="100%" >
	  <tr>
		<td colspan="2">LOGIN FOR ADMIN</td>
	  </tr>
	  <form id="form1" name="form1" method="post">
	  <tr>
		<td><label>ID Number:</label></td>
		  <td><input name="Username" type="text" id="textfield"  /></td>
		</tr>
		<tr>
		  <td><label>Password:</label></td>
		  <td><input type="password" name="Password" id="textfield2" style="margin-top:5px;" /> </td>
		 </tr>
		 <tr>
		  <td colspan="2"><label><input type="submit" name="login" id="button" value="Login" /> </label>
		 <?php 
		require ("db.php");
		$error = "";

		if (isset($_POST['login'])) 
		{ 			
			$UserName = trim($_POST['Username']);			
			$Password = trim($_POST['Password']);	
				
			// sending query		
			$result = mysql_query("SELECT * FROM admin WHERE UserName = '$UserName' AND Password = 
						   '$Password'");
						   
			if (!$result) 
			{
				die("Query to show fields from table failed");
			}
									
			$numberOfRows = mysql_num_rows($result);				
			$row = mysql_fetch_array($result);					
				
				if ($numberOfRows == 0) 
				{
					echo " <br><center><font color= 'red' size='1'>Invalid UserName and Password!</center></font>";
				} 
				else if ($numberOfRows > 0) 
				{
					//session_start();
					session_register('is');
					$_SESSION['is']['login']    = TRUE;
					$_SESSION['is']['AUserName'] = $_POST['UserName'];
					$username = $_POST['username'];
					//$myquery = mysql_query("SELECT * FROM admin WHERE UserName = '$username'");
					//$arraytofetch = mysql_fetch_array($myquery);
					$_SESSION['userid'] = $row['adminID'];
									
					$_SESSION['logged']="true";
					$session = "1";	
							
				header("location:admin_home.php");				 	
				}
		}
	?>
		 
		</td>
	  </tr>
	   </form>
	</table>
  </div>
  	
  <div id="right"></div>
</div>

<div id="layer04_holder">
  <div id="left"></div>
  <div id="center" style="padding-top: 8px;">
  <div class="menu">
  If you forgot your password, please contact the Registrar's Office. Click Here to Log-in for<br /><a href="../teacher/index.php">Teacher</a>
   <em>Click Here To Log-in For Teacher.</em>,<a href="../index.php">Student</a><em>Click Here To Log-in For Student.</em></div></div>
  <div id="right"></div>
</div>

<div id="layer05_holder">
  <div align="left">Copyright © 2008, University of Gondar. All right reserved</div>
</div>


</body>
</html>


			
							