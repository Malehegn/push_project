<?php 
	session_start();
	if (!isset($_SESSION['Tuserid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}
	require("db.php");
	$id =$_SESSION['Tuserid'];
	$result = mysql_query("SELECT * FROM teacher WHERE teacherid ='$id'");
	$test = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png"  />
<head>


<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Profile Teacher</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post" style="width: 561px; margin-left: -58px;">
						
						<h2 class="title"><a href="#">Welcome <?php echo $test['firstname'] . " " . $test['middlename'] . " ". $test['lastname']; ?>! </a></h2>
						<p class="meta"><span class="date">
															<?php $date= date("l, F d, Y");
																
																echo $date ;
																echo "  &nbsp; "
															?> 
										</span></p>
						<div class="entry">
							<div class="pic">
								<fieldset style="border-top-left-radius:5px; border-top-right-radius:5px; border-bottom-left-radius:5px; border-bottom-right-radius:5px;">							
<?php echo "<img src='../01-for login page/images/photos/".$test['upload']."' width='210' height='270 alt='user photo'/>"; ?>	
		
								</fieldset>
							</div>
							
							<div class="right_side">
							<fieldset style="border-top-left-radius:5px; border-top-right-radius:5px; border-bottom-left-radius:5px; border-bottom-right-radius:5px;">
							<legend><b>Teacher's Profile</b></legend>
							<p>&nbsp;</p>
							<p><strong>ID #: <a href="#"> <?php echo $test['UserName']; ?></a> </strong></p>
							<p>&nbsp;</p>
							<p><b>Name: <a href="#"><?php echo $test['firstname'] . " " . $test['middlename'] . " ". $test['lastname']; ?></a></b></p>
							<p>&nbsp;</p>
							<p><b>Contact Number: <a href="#"><?php echo $test['contactnum']; ?></a></b></p>
							<p>&nbsp;</p>
							<p><b>Address: <a href="#"><?php echo $test['address']; ?></a></b></p>
							</fieldset>
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
						
							<li class="current_page_item"><a href="#">Profile</a></li>
								<li><a href="not.php">Notification</a></li>
							<li><a href="teachload.php">Load</a></li>
							<li><a href="teachgrade2.php">Add Grades</a></li>
							<li><a href="persection.php">ADD grade per_section</a></li>
								<li><a href="viewprob.php">View Problems</a></li>
							<li><a href="teachupgrade.php">User's Manual</a></li>
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
	<p>Copyright (c) 2008 University of Gondar registrar. All rights reserved.</p>
</div>
<!-- end #footer -->
</body>
</html>
