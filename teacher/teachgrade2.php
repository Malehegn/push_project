<?php session_start();?>
<?php
	if (!isset($_SESSION['Tuserid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html >
<html>
<script language="JavaScript" type="text/javascript" src="jquery.js"></script>
		<script language="JavaScript" type="text/javascript" src="jTPS.js"></script>
		<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="jTPS.css">

        <script>

                $(document).ready(function () {
               
                        $('#demoTable').jTPS( {perPages:[5,12,15,50,'ALL'],scrollStep:1,scrollDelay:30,
                                clickCallback:function () {    
                                        // target table selector
                                        var table = '#demoTable';
                                        // store pagination + sort in cookie
                                        document.cookie = 'jTPS=sortasc:' + $(table + ' .sortableHeader').index($(table + ' .sortAsc')) + ',' +
                                                'sortdesc:' + $(table + ' .sortableHeader').index($(table + ' .sortDesc')) + ',' +
                                                'page:' + $(table + ' .pageSelector').index($(table + ' .hilightPageSelector')) + ';';
                                }
                        });

                        // reinstate sort and pagination if cookie exists
                        var cookies = document.cookie.split(';');
                        for (var ci = 0, cie = cookies.length; ci < cie; ci++) {
                                var cookie = cookies[ci].split('=');
                                if (cookie[0] == 'jTPS') {
                                        var commands = cookie[1].split(',');
                                        for (var cm = 0, cme = commands.length; cm < cme; cm++) {
                                                var command = commands[cm].split(':');
                                                if (command[0] == 'sortasc' && parseInt(command[1]) >= 0) {
                                                        $('#demoTable .sortableHeader:eq(' + parseInt(command[1]) + ')').click();
                                                } else if (command[0] == 'sortdesc' && parseInt(command[1]) >= 0) {
                                                        $('#demoTable .sortableHeader:eq(' + parseInt(command[1]) + ')').click().click();
                                                } else if (command[0] == 'page' && parseInt(command[1]) >= 0) {
                                                        $('#demoTable .pageSelector:eq(' + parseInt(command[1]) + ')').click();
                                                }
                                        }
                                }
                        }

                        // bind mouseover for each tbody row and change cell (td) hover style
                        $('#demoTable tbody tr:not(.stubCell)').bind('mouseover mouseout',
                                function (e) {
                                        // hilight the row
                                        e.type == 'mouseover' ? $(this).children('td').addClass('hilightRow') : $(this).children('td').removeClass('hilightRow');
                                }
                        );

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
				 $value=document.getElementById("mar").value;
				 $course=document.getElementById("co").value;
				 $year=document.getElementById("yr").value;
				 $sec=document.getElementById("sec").value;
				  $sem=document.getElementById("sem").value;
				   $dep=document.getElementById("dep").value;
				 if($value > 100){
					 alert("please enter correct mark !!! mark can't be greater than 100");
					
					 return false;
				 }
				else if($course == '---Select Course---'){
					 alert("Please choose one course !!!");
					
					 return false;
				 }
				 else if($year == '---Select Year---'){
					 alert("Please choose students year !!!");
					
					 return false;
				 }
				  else if($sec == '---Select Section---'){
					 alert("Please choose students Section !!!");
					
					 return false;
				 }
				  else if($sem == '---Select Semester---'){
					 alert("Please choose Semister !!!");
					
					 return false;
				 }
				   else if($dep == '---Select Department---'){
					 alert("Please choose Department !!!");
					
					 return false;
				 }
				 return true;
			 }
			 </script>
        <style>
                body {
                        font-family: Tahoma;
                        font-size: 9pt;
                }
                #demoTable thead th {										
                        white-space: nowrap;
                        overflow-x:hidden;
                        padding: 3px;
                }
                #demoTable tbody td{
												
                        padding: 3px;
                }
        </style>
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png"  />
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Add grade</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post" style="width: 561px; margin-left: -58px;">
						<h2 class="title"><font color="#E44D32"><strong>Add Grade Individual(End-term)</strong></font></h2>
						<p class="meta"><span class="date">
															<?php $date= date("l, F d, Y");
																/*echo " <font color ='black'>";*/
																echo $date ;
																echo "  &nbsp; "
															?> 
		</span><span class="posted">&nbsp;</span></p>
						<div style="clear: both;">&nbsp;</div>
						<div class="entry">
 <html>
<body>
<form method="POST">

 <table>
 <tr>
 <td>ID:</td>
 <td><input type="text" name="id" onKeyPress="return isNumberKey(event)" required></td>
 <td>&nbsp;</td>
		<td>Year:</td>
 <td>
					<select id="yr" name="year" style="width: 148px;">
						<option>---Select Year---</option>
						<option>I</option>
						<option>II</option>
						<option>III</option>
						<option>IV</option>
						
					</select>
				</td> </tr>
	  <tr>
		<td>School Year:</td>
		<td><input type="text" name="schyr" maxlength="4" onKeyPress="return isNumberKey(event)" required /></td>
	  	<td>&nbsp;</td>
		<td>Section:</td>
				<td>
					<select id="sec" name="sec" style="width: 148px;">
					<option>---Select Section---</option>
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
					
				</select>
				</td>				
	
		</tr>
	  <tr>
		<td>Course:</td>
		<td>
					<select  id="co" name="course" style="width: 173px;">
						  <option>---Select Course---</option>
					<?php
		  		include ("db.php");
				$id =$_SESSION['Tuserid'];
						
				$sql = mysql_query("SELECT * FROM tcourse WHERE teacherid ='$id'");
				while($test = mysql_fetch_array($sql))
				{
				if (!$test)
					{
					die("Error: Data not Found. . ");
					}
					$ects=$test['hrsperweek'];
					$courseid=$test['courseID'];
					$getcourse=mysql_query("SELECT * FROM course WHERE courseID='$courseid'") or die(mysql_error());
					$getthis=mysql_fetch_array($getcourse);
				echo "<option value=".$getthis['courseID'].">".$getthis['coursetitle']."</option>";
				}
					mysql_close($conn);
				 ?>
				 
					  </select>
					  <td>&nbsp;</td>
		</td>
		<td>Semester</td>
				<td>
					<select id="sem" name="sem" style="width: 148px;">
						<option>---Select Semester---</option>
						<option>1st Semester</option>
						<option>2nd Semester</option>
												
					</select>
				</td>
			
		
			
		</tr>
		<tr>
		
						
			</tr>
			
		<tr>
		
			<td>Mark:</td>
	<td><input type="text" id="mar" name="mark" maxlength="3"  onKeyPress="return isNumberKey(event)"  required ></td>
	<td>&nbsp;</td> 
	<td>Department:</td>
		<td>
					<select  id="dep" name="department" style="width: 148px;">
						  <option>---Select Department---</option>
					<?php
		  		include ("db.php");
				$id =$_SESSION['Tuserid'];
						
				$sql = mysql_query("SELECT * FROM tdep WHERE teacherID ='$id'");
				while($testd = mysql_fetch_array($sql))
				{
				if (!$testd)
					{
					die("Error: Data not Found. . ");
					}
				
					$depid=$testd['depID'];
					$getdep=mysql_query("SELECT * FROM department WHERE depID='$depid'") or die(mysql_error());
					$getthis=mysql_fetch_array($getdep);
				echo "<option value=".$getthis['depID'].">".$getthis['depName']."</option>";
				}
					mysql_close($conn);
				 ?>
					  </select>
		</td>
	
		
		</tr>
		</table>

<pre>           <input type="submit" onclick ="return noMore()"  name="submit" value="Submit" style="font-size:30px; border-radius:7px; border:2px solid #dadada;background-color:blueblack; color:green"> </pre>
</form></body></html>
<?php
if(isset($_POST['submit']))
				{
$id = $_POST['id'];
$schyr = $_POST['schyr'];
$sem = $_POST['sem'];
$year = $_POST['year'];
$sec = $_POST['sec'];
$courseid = $_POST['course'];
$mark = $_POST['mark'];
$dep=$_POST['department'];

$con=@mysql_connect ('localhost','root','');
mysql_select_db("onlinegradeinquiry",$con);
$result=mysql_query("SELECT * FROM course WHERE courseID ='$courseid'");
while($test = mysql_fetch_array($result))
				{
				if (!$test)
					{
					die("Error: Data not Found. . ");
					}
					$ects=$test['hrsperweek'];
				
				}
				if ($mark>=90){
	$gradep=$ects*4;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','A+','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
}
			else if ($mark>=85){
	$gradep=$ects*4;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','A','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
}
else if ($mark>=80){
	$gradep=$ects*3.75;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','A-','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
}
else if ($mark>=75){
	$gradep=$ects*3.5;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','B+','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
}
else if ($mark>=70){
	$gradep=$ects*3;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','B','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
}
			else if ($mark>=65){
	$gradep=$ects*2.75;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','B-','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
			}
			else if ($mark>=60){
	$gradep=$ects*2.5;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','C+','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
			}
			else if ($mark>=50){
	$gradep=$ects*2;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','C','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
			}
			else if ($mark>=45){
	$gradep=$ects*1.75;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','C-','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
			}
			else if ($mark>=40){
	$gradep=$ects*1;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','D','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
			}
			else if ($mark>=35){
	$gradep=$ects*0;
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','Fx','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
			}
else {
	$gradep=$ects*0;
	
	$sql="INSERT INTO studsem(studentid,schyr,sem,year,section,depID,courseID,ects,mark,grades,gradepnt)
VALUES ('$id', '$schyr', '$sem', '$year', '$sec','$dep','$courseid','$ects','$mark','F','$gradep')";
$select=mysql_select_db("onlinegradeinquiry",$con);

}
if (!mysql_query($sql)) {
die('Error: ' . mysql_error($con));
}
echo"<pre>      <h3 style=color:blue>One Record Successfully Added</h3>";
				
mysql_close($con);

				}

?>

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
							<li class="current_page_item" ><a href="#">Add Grades </a></li>
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
								<form method="get" action="" target="_blank">
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
	<p>Copyright (c) 2008 university of Gondar. All rights reserved.</p>
</div>
<!-- end #footer -->
</body>
</html>
