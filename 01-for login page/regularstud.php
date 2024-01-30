<?php session_start();?>
<?php
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
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
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Choose One</title>

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
	  <h1><strong> 2nd Step:Add Load For Regular Student</strong></h1>
	  <form name="studsem" method="post" style="margin-left: -63px;" >
	
		<fieldset style="width: 453px; margin-left: 2px; border-left-width: 2px;">
		<legend>Add student's Record Per Semester</legend>
			<table>
				<tr>
					<td>School Year:</td>
					<td><input type="text" name="schyr" /></td>
					<td>&nbsp;</td>
					<td>Sem:</td>
					<td>
						<select name="sem">	
							<option>---Select Semester---</option>						
							<option>1st Semester</option>
							<option>2nd Semester</option>
							<option>Summer Semester</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Year</td>
					<td>
						<select name="yr">	
							<option>---Select Year---</option>						
							<option>I</option>
							<option>II</option>
							<option>III</option>
							<option>IV</option>
							<option>V</option>
						</select>
							
					</td>
				<td>&nbsp;</td>
					<td>Section</td>
					<td>
						<select name="section">	
							<option>---Select Section---</option>						
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
							<option>E</option>
							<option>F</option>
							<option>G</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Program:</td>
					<td>
					<select  name="program" style="width: 148px;">
								  <option>---Select Program---</option>	
								 <?php include ("db.php");
										$result = mysql_query("SELECT * FROM program");
										while($test = mysql_fetch_array($result)){
										 ?>
										
								  <option>
								  <?php $id = $test['programId'];
										echo $test['programtitle'];?>           
								  </option>
								  <?php }
									mysql_close($conn);
									 ?>
					</select>
					</td>
				<td>&nbsp;</td>
					<td>Major</td>
					<td>
						<select  name="major" style="width: 148px;">
								  <option>---Select Major---</option>	
								  <?php include ("db.php");
										$result = mysql_query("SELECT * FROM major");
										while($test = mysql_fetch_array($result)){
										 ?>
										
								  <option>
								  <?php $id = $test['majorID'];
										echo $test['major'];?>           
								  </option>
								  <?php }
									mysql_close($conn);
									 ?>
								  
					</select>
					</td>
				</tr>
				<tr>
					<td>Course Code:</td>
					<td><select  name="course" style="width: 148px;">
								  <option>---Select Course---</option>
						
						<?php
		  		include ("db.php");
				$result = mysql_query("SELECT * FROM course ORDER BY courseID");
				while($test = mysql_fetch_array($result))
				{
				if (!$result)
					{
					die("Error: Data not Found. . ");
					}
				echo "<option value=".$test['courseID'].">".$test['coursetitle']."</option>";
				}
					mysql_close($conn);
				 ?>
						  </select>
				
					</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="addsemload" class="btn" value="Add to tables"/> </td></tr>	
			</table>
			</fieldset>
			<br />





		
	  </form >
	  <form >
	   <table id="demoTable" style="border: 1px solid rgb(204, 204, 204); table-layout: fixed; padding-left: 0px; margin-left: -125px;" width="700" bgcolor="#FFFFFF">
        <thead >
                <tr>
                        
                        <th sort="date"><span class="style7">SchoolYR</span></th>
                        <th sort="description"><span class="style7">Sem</span></th>
                        <th sort="beds"><span class="style7">Year</span></th>
						<th sort="beds"><span class="style7">Section</span></th>
						<th sort="beds"><span class="style7">Program</span></th>
						<th sort="beds"><span class="style7">Major</span></th>
						<th sort="beds"><span class="style7">Course Title</span></th>
						<th sort="beds"><span class="style7">Delete</span></th>
				</tr>
        </thead>
        <tbody>
	   <?php
			include("db.php");
			
			$result=mysql_query("SELECT studsemtemp.studsemtempID, studsemtemp.schyr, studsemtemp.sem, studsemtemp.year, studsemtemp.section, studsemtemp.program, studsemtemp.major, course.coursetitle FROM studsemtemp LEFT JOIN course ON studsemtemp.courseID=course.courseID ");
				
					
			while($test = mysql_fetch_array($result))
		{
				$ids = $test['studsemtempID'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>". $test['schyr']. "</font></td>";
				echo"<td><font color='black'>". $test['sem']. "</font></td>";	
				echo"<td><font color='black'>". $test['year']. "</font></td>";		
				echo"<td><font color='black'>". $test['section']. "</font></td>";
				echo"<td><font color='black'>". $test['program']. "</font></td>";
				echo"<td><font color='black'>". $test['major']. "</font></td>";
				echo"<td><font color='black'>". $test['coursetitle']. "</font></td>";
				echo"<td> <a href ='del_stud_info_sem(code).php?studsemtempID=$ids'><center><img src='images/9.png'></center></a></td>";
				
				echo "</tr>";
		}	
	?>
			
		 </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=8 ><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle">Page</div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
								</font>
                        </td>
                </tr>
				
				
        </tfoot>
		
</table>

</form>

<form method="post" action="">
<input type="submit" name="addstudsem" value="Click here to View student Records" class="btn" />
<?php
								if (isset($_POST['addstudsem']))
											{
											include("db.php");
											
										$result=mysql_query("SELECT * FROM studsemtemp");			
										while($test = mysql_fetch_array($result))
										{
					
												
										$studentID=$test['studentID'];
										$schyr=$test['schyr'];
										$sem=$test['sem'];
										$year=$test['year'];
										$section=$test['section'];
										$program=$test['program'];
										$major=$test['major'];
										$courseID=$test['courseID'];
															
																			
									 mysql_query("INSERT INTO `studsem`(studentID,schyr,sem,year,section,program,major,courseID) 
									 VALUES ('$studentID','$schyr','$sem','$year','$section','$program','$major','$courseID')"); 
											}
											mysql_query('TRUNCATE TABLE studsemtemp;')
											or die(mysql_error());
											
											header("Location: view_stud_info.php");
										}
							?>
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
