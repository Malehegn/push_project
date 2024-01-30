<?php session_start();?>
<?php
	if (!isset($_SESSION['Tuserid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html >
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png"  />
<style type="text/css">
<!--
.style4 {color: #330000; font-size: 14px; font-style: italic; font-family: "Times New Roman", Times, serif;}
.style6 {
	font-family: "Bradley Hand ITC";
	color: #330000;
	font-weight: bold;
}
-->
</style>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Load</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post" style="width: 561px; margin-left: -58px;">
						<h2 class="title"><a href="#" class="style6">Users Manual</a></h2>
						<p class="meta"><span class="date">
															<?php $date= date("l, F d, Y");
																/*echo " <font color ='black'>";*/
																echo $date ;
																echo "  &nbsp; "
															?> 
		</span><span class="posted">&nbsp;</span></p>
						<div style="clear: both;">&nbsp;</div>
					  <div class="entrys">
					  <br />
					  	<span class="style4">By using the User's Manual the user will have the knowledge on how to operate the system properly. It serves as a guiding tool in accessing the different parts of the system. <br />
					  	<br />
						It also explains what thing should be done first and it give some tips on how to solve some problems if the system encountered some errors. <br />
						<br />
						In this section, it discusses about some steps to help user on how to manage the Online Grading System of Atse Tewdros campus office of registrar. It shows some guide, description, and instruction for every part of the system.<br />
						<br />
					  	</span>
						<div class="entrys style4"><br /><br />
						WHAT TO DO FIRST:<br /><br />
						* Input valid username and password.<br />
						
						<br />
						* Click the log-in button to view profile.<br /><br />
						* To add grades, just click the add grades button to add grades per section.<br /><br />
						* To change password, click the change password button then enter the desired password.<br /><br />
						* Click the log-out button to Log-out.<br /><br />
						
						
						
						</div>
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
					<li class="current_page_item"><a href="#">User's Manual</a></li>
							<li><a href="teachchangepass.php">Change Password</a></li>
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
	<p>Copyright (c) 2008 University of Gondar. All rights reserved.</p>
</div>
<!-- end #footer -->
</body>
</html>
