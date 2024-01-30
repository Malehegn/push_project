<?php session_start();?>
<?php
	if (!isset($_SESSION['Tuserid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html >
<html >
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
						<h2 class="title"><font color="#E44D32"><strong>Add Grades (End-term)</strong></font></h2>
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

 <form method="post">

	  <table>
	  <!--<tr>
		<td>School Year:</td>
		<td><input type="text" name="schyr" /></td>
	  	<td>&nbsp;</td>
			<td>Program:</td>
			<td>
				<select  name="prog" style="width: 148px;">
						  <option>---Select Program---</option>		
						  <?php
						  		include ("db.php");
								$result = mysql_query("SELECT * FROM program");
								while($test = mysql_fetch_array($result)){
							?>
								
						  <option>
						  <?php $id = $test['programId'];echo $test['programtitle'];?>           
						  </option>
						  <?php }
							mysql_close($conn);
							 ?>
					  </select>
			</td> 
		</tr>
	  <tr>
		<td>Course:</td>
		<td>
					<select  name="course" style="width: 148px;">
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
					$courseid=$test['courseID'];
					$getcourse=mysql_query("SELECT * FROM course WHERE courseID='$courseid'") or die(mysql_error());
					$getthis=mysql_fetch_array($getcourse);
				echo "<option value=".$getthis['courseID'].">".$getthis['coursetitle']."</option>";
				}
					mysql_close($conn);
				 ?>
					  </select>
		</td>
		<td>&nbsp;</td>
		<td>Section:</td>
				<td>
					<select name="sec">
					<option>--Select Section--</option>
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
					<option>E</option>
					<option>F</option>
					<option>G</option>
				</select>
				</td>		
		</tr>  -->
		<tr>
				<td>Year:</td>
				<td>
					<select name="year" style="width: 148px;">
						<option>---Select Year---</option>
						<option>I</option>
						<option>II</option>
						<option>III</option>
						<option>IV</option>
						
					</select>
				</td>						
				<td>&nbsp;</td>
				<!--<td>Semester</td>
				<td>
					<select name="semester" style="width: 148px;">
						<option>---Select Semester---</option>
						<option>1st Semester</option>
						<option>2nd Semester</option>
										
					</select>
				</td>	-->	
			</tr>
			<tr><td>&nbsp;</td></tr>
		<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="CLICK HERE TO FILTER" name="sheet" class="btn" /></td>
		</tr>
		</table> 
		</form>
		<form method="post" action="update2.php">
		
		
		  <table id="demoTable" style="border: 1px solid rgb(204, 204, 204); table-layout: fixed; " cellspacing="0" width="550" bgcolor="#FFFFFF">
        <thead >
                <tr>	
						<th sort="beds" align="center" style="width: 98px;"><span class="style7">name</span></th>
						<!-- <th sort="beds" align="center" style="width: 70px;"><span class="style7">Course</span></th> -->
						<th sort="beds" align="center" style="width: 29px;"><span class="style7" >ID</span></th>
						<th sort="beds" align="center" style="width: 65px;"><span class="style7">SchYr</span></th>
						
                      <!-- 	<th sort="beds" align="center" style="width: 72px;"><span class="style7">Prog,YR,SEC</span></th> -->
						<th sort="beds" align="center" style="width: 36px;"><span class="style7">Mark</span></th>
					<!--	<th sort="beds" align="center" style="width: 77px;"><span class="style7">Remarks</span></th> -->
						
						
				</tr>
        </thead>
        <tbody>
	
	
	</tbody>
		<?php include('db.php');
				
				if(isset($_POST['sheet']))
				{
				$_SESSION['schyr'] = $_POST['schyr'];
				$_SESSION['prog'] = $_POST['prog'];
				$_SESSION['course'] = $_POST['course'];
				$_SESSION['section'] = $_POST['sec'];
				$_SESSION['year'] = $_POST['year'];
				$_SESSION['semester'] = $_POST['semester'];
				
				$schyr = $_POST['schyr'];
				$prog = $_POST['prog'];
				$course = $_POST['course'];
				$section = $_POST['sec'];
				$year = $_POST['year'];
				$semester = $_POST['semester'];
				
				 
				
		$result = mysql_query("SELECT * FROM studsem WHERE year= '$year' ");
  			
		
				$i=0;
				while($row = mysql_fetch_array($result))
 				 {
				 $id = $row['studSemID'];
				 $id1=$row['studentID'];
				echo "<tr align='center'>";	
				
					$results=mysql_query("SELECT  student.firstname,student.middlename FROM studsem LEFT JOIN student ON studsem.studentID=student.studentID WHERE studSemID='$id'");
				while($tests = mysql_fetch_array($results))
				{
				echo"<td><font color='black'>". $tests['firstname'].'&nbsp;'. $tests['middlename']. "</font></td>";
				}
				/*
				$resulta=mysql_query("SELECT  course.coursetitle FROM studsem LEFT JOIN course ON studsem.courseID=course.courseID WHERE studSemID='$id'");
				while($testsa = mysql_fetch_array($resulta))
				{
				echo"<td><font color='black'>". $testsa['coursetitle']. "</font></td>";
				}
			*/
				echo "<td><font color='black'>{$row['studentID']}<input type='hidden' name='studSemID[$i]' value='{$row['studentID']}' /></font></td>";
				echo"<td><font color='black'>". $row['schyr']. "</font></td>";			

			//	echo"<td><font color='black'>". $row['program'].','. $row['year'].'-'. $row['section']. "</font></td>";				
				echo"<td><input type='text' name='mark[$i]' style='width: 35px;' . '/></td>";
				/* echo"<td>
					<select name='remarks[$i]'>
						<option>".$row['remarks']."</option>
						<option>Passed</option>
						<option>Failed</option>
						<option>Dropped</option>
						<option>INC.</option>
					</select>
					</td>"; */
						++$i;
				}
				echo "</tr>";
				
				
				
			
				}
			
			?>
			
				
		 </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=7 ><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle">Page</div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
								</font>
                        </td>
                </tr>
				<tr>
				<td colspan=7><input type="submit" value="SAVE GRADES" name="btnupdate" class="btn" /></td>
			</tr>
        </tfoot>
			
</table>
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
						<ul>
							<li><a href="teachprofile.php">Profile</a></li>
							<li><a href="teachload.php">Load</a></li>
							<li class="current_page_item" ><a href="#">Add Grades </a></li>
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
