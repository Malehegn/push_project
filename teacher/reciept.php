<?php session_start();?>
<?php
	if (!isset($_SESSION['Tuserid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}
	require("db.php");
	$id =$_SESSION['Tuserid'];
	$result = mysql_query("SELECT * FROM teacher WHERE teacherid ='$id'");
	$test = mysql_fetch_array($result);
 ?>
<!DOCTYPE html >
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Confirmation Sheet</title>
</head>

<body>

<div style="height:100px" align="center">
	<div align="left" style="width:100px; float:left; margin-left:50px; margin-top:0px;">
		<img src="images/chmsc.png" height="100"  width="100"/>
	</div>
	<div align="left" style="width:400px;margin-top:50px;">
		<p><center>Republic of the Philippines</center></p>
		<p><center>CARLOS HILADO MEMORIAL STATE COLLEGE</center></p>
		<p><center>Talisay City, Negros Occidental</center></p>
		<p><center><b>Confirmation Sheet</b></center></p>
	</div>
</div>
<br /><br /><br /><br />
	<div>
			<p>Date: <?php $date= date("l, F d, Y");
					 /*echo " <font color ='black'>";*/
					  echo $date ;
					  echo "  &nbsp; "
					  ?> </p>
			<p>Name: <?php echo $test['firstname'] . " " . $test['middlename'] . " ". $test['lastname']; ?></p>
			
			<p>Program: <?php echo $_SESSION['prog'];?></p>
			<?php 
				$one=$_SESSION['course'];
				$select= mysql_query("SELECT * FROM course WHERE courseID='$one'") or die(mysql_error());
				$two=mysql_fetch_array($select);
				$three=$two['coursetitle'];
			 ?>
			<p>Course: <?php echo $three;  ?></p>
			<p>Yr &amp; Sec: <?php echo $_SESSION['year'].'-'.$_SESSION['section'];?></p>
			
			
			
			
	</div>
<br /><br /><br />
	<div>
		<p>Notisya:<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 Amu na ang dapat ipa print sang teacher para may hawid sa nga-e paketah sa Registrar in case nga wala na record ang iya gn add nga grades.
		<br />(Translate this to English Version).<a href="teachprofile.php" style="color:#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
		</p>
	</div>
</body>
</html>
