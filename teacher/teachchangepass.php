<?php
	session_start();
	if (!isset($_SESSION['Tuserid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html>
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png"  />
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Load</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="screen" href="screen.css" />

<!--<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.validate.js" type="text/javascript"></script> -->

<!--<script type="text/javascript">
$().ready(function() {
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
		
			cpassword: {
				required: true,
				minlength: 5
			},
			
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			
			agree: "required"
		},
		messages: {
		
			cpassword: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			
			agree: "Please accept our policy"
		}
	});
});
</script>
<style>
	.cpassword{color:#FF0000;}
</style> -->
</head>
<body>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
				  <div class="post" style="width: 561px; margin-left: -58px;">
						<h2 class="title"><a href="#">Change Password</a></h2>
						<p class="meta"><span class="date">
							<?php $date= date("l, F d, Y");									
							echo $date ;
							echo "  &nbsp; "
							?> 
						</span></p>
					  <div class="entry">
					  <br /><br />
					  <form class="cmxform" id="signupForm" method="post" action="">
						<fieldset>
							<legend>Validating a complete form</legend>
							 <p>
							  <label for="name" style="color:#FF0000;">ID Number:</label>
							  <input type="text" class="text w_22" name="user" id="name" value="" style="margin-left: 41px;" required />
							</p>
							<p>
								<label for="cpassword" style="color:#FF0000;">Current Password:</label>
								<input id="cpassword" name="cpassword" type="cpassword" style="margin-left: 0px;" required />							
							</p>
							
							<p>
								<label for="password" style="color:#FF0000;">Password:</label>
								<input id="password" name="password" type="password" style="margin-left: 46px;" required />
							</p>
							<p>
								<label for="confirm_password" style="color:#FF0000;">Confirm password:</label>
								<input id="confirm_password" name="confirm_password" type="password" required />
							</p>
										
							<input class="submit" type="submit" value="Submit" name="save_pass"/>
							</p>
<?php  

include ("db.php");  

if(isset($_POST['save_pass'])){
$username = $_POST['user']; 
$password = $_POST['cpassword']; 
$newpassword = $_POST['password']; 
$confirmnewpassword = $_POST['confirm_password']; 

$result = mysql_query("SELECT password FROM teacher WHERE UserName='$username'"); 
if($username=="" && $password=="" && $newpassword=="" && $confirmnewpassword==""){
			echo "Please enter a valid username and password!";
		}else{
if(!$result)  
{  
echo "The username you entered does not exist";  
}  
else  
if($password!= mysql_result($result, 0))  
{  
echo "You entered an incorrect password";  
}  
if($newpassword=$confirmnewpassword)  
    $sql=mysql_query("UPDATE teacher SET password='$newpassword' where UserName='$username'");  
    if($sql)  
    {  
    echo "Congratulations You have successfully changed your password";  
    } 
else 
{  
echo "The new password and confirm new password fields must be the same";  
}
}}
?>
						</fieldset>
					</form>		  			  
					  					  
					  </div>
				  </div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
				  <div id="logo">
						<h1></h1>
				    </div>
					<div id="menu">
						
						
							
							
							
								<li><a href="teachprofile.php">Profile</a></li>
								<li><a href="not.php">Notification</a></li>
							<li><a href="teachload.php">Load</a></li>
							<li><a href="teachgrade2.php">Add Grades </a></li>
							<li><a href="persection.php">ADD grade per_section</a></li>
								<li><a href="viewprob.php">View Problems</a></li>
			                <li><a href="teachupgrade.php">User's Manual</a></li>
					        <li class="current_page_item"><a href="#">Change Password</a></li>
							<li><a href="logout.php">Log-out</a></li>
						</ul>
					</div>
					<ul>
						<li>
							<div id="search" >
								<form method="get" action="http://www.google.com.ph/search" target="_blank">
									<div>
										<input type="text" name="s" id="search-text" value="" style="width: 114px;" />
										<input type="submit" id="search-submit" value="GO" />
									</div>
								</form>
							</div>
							<div style="clear: both;">&nbsp;</div>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2011 chmscogi.edu.ph. All rights reserved.</p>
</div>
<!-- end #footer -->
</body>
</html>
