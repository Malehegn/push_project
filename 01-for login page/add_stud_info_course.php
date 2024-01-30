<?php session_start();?>
<?php
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html>
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
		<script language="JavaScript" type="text/javascript" src="jquery.js"></script>
        <script language="JavaScript" type="text/javascript" src="jTPS.js"></script>
		<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="jTPS.css">
		<script language="javascript" >
	 function isNumberKey(evt)
	 {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	
	return false;
	return true;
	 }  
	</script>

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
		<script type="text/javascript" >
			 function noMore(){
			
				 $year=document.getElementById("yr").value;
				 $sec=document.getElementById("sec").value;
				
				 $dep=document.getElementById("dep").value;
				 
			
				
				 if($year == '---Select Year---'){
					 alert("Please choose students year !!!");
					
					 return false;
				 }
				  else if($sec == '---Select Section---'){
					 alert("Please choose students Section !!!");
					
					 return false;
				 }
				 else if($dep == '--Select Department--'){
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add student's Per Semester</title>

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
      <div id="templatemo_content_right">
	   <h1><strong> 2nd Step:Add Students Sections </strong></h1>
	  <form name="studsem" method="post" style="margin-left: -63px;" >
	
		<fieldset style="width: 453px; margin-left: 2px; border-left-width: 2px;">
		<legend>Add student's Record Per Semester Individualy</legend>
			<table>
				<!--<tr>
					<td>School Year:</td>
					<td><input type="text" name="schyr" maxlength="4" onKeyPress="return isNumberKey(event)" /></td>
					<td>&nbsp;</td>
					<td>Sem:</td>
					<td>
						<select name="sem">	
							<option>---Select Semester---</option>						
							<option>1st Semester</option>
							<option>2nd Semester</option>
						
						</select>
					</td>
				</tr> -->
				<tr>
					<td>Year</td>
					<td>
						<select name="yr" id="yr">	
							<option>---Select Year---</option>						
							<option>I</option>
							<option>II</option>
							<option>III</option>
							<option>IV</option>
							
						</select>
							
					</td>
				<td>&nbsp;</td>
					<td>Section</td>
					<td>
						<select name="section" id="sec">	
							<option>---Select Section---</option>						
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
							
						</select>
						</td>
							<td>&nbsp;</td>
					<td>Department</td>
						<td>
					
						<select  name="department" id="dep" style="width: 148px;">
					
					
						  <option>--Select Department--</option>
					<?php
		  		include ("db.php");
				$id =$_SESSION['userid'];
						
				$sql = mysql_query("SELECT * FROM department");
				while($testd = mysql_fetch_array($sql))
				{
				if (!$testd)
					{
					die("Error: Data not Found. . ");
					}
				
				echo "<option value=".$testd['depID'].">".$testd['depName']."</option>";
				}
					mysql_close($conn);
				 ?>
					  </select>
					</td>
				</tr>
				<tr>
				<!--	<td>Program:</td>
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
				
					</td> -->
				</tr>
				<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="addsemload" onclick="return noMore()" class="btn" value="Add to tables"/> </td></tr>	
			</table>
			</fieldset>
			<br />
<?php
if (isset($_POST['addsemload']))
	{	   
	include 'db.php';
	
					
					$id=$_SESSION['studentID'];
		             $yr=$_POST['yr'] ;
					$section=$_POST['section'] ;
					$dep=$_POST['department'];
					
					
		
												
		 mysql_query("INSERT INTO `studsemtemp`(studentID,year,section,depID) 
		 VALUES ('$id','$yr','$section','$dep')"); 
									
	        } 	
?>




		
	  </form >
	  <form >
	   <table id="demoTable" style="border: 1px solid rgb(204, 204, 204); table-layout: fixed; padding-left: 0px; margin-left: -125px;" width="700" bgcolor="#FFFFFF">
        <thead >
                <tr>
                           <th sort="beds"><span class="style7">student ID</span></th> 
                     
                        <th sort="beds"><span class="style7">Year</span></th>
						<th sort="beds"><span class="style7">Section</span></th>
				
						<th sort="beds"><span class="style7">Department</span></th>
						<th sort="beds"><span class="style7">Delete</span></th>
				</tr>
        </thead>
        <tbody>
	   <?php
			include("db.php");
			$idm=$_SESSION['studentID'];
			
			$result=mysql_query("SELECT studsemtemp.studsemtempID, studsemtemp.depID, studsemtemp.sem, studsemtemp.year, studsemtemp.section, studsemtemp.program, studsemtemp.major, department.depName FROM studsemtemp LEFT JOIN department ON studsemtemp.depID=department.depID ");
				
					
			while($test = mysql_fetch_array($result))
		{
				$ids = $test['studsemtempID'];	
				echo "<tr align='center'>";	
				//echo"<td><font color='black'>". $test['schyr']. "</font></td>";
				echo"<td><font color='black'>". $idm. "</font></td>";	
				echo"<td><font color='black'>". $test['year']. "</font></td>";		
				echo"<td><font color='black'>". $test['section']. "</font></td>";
				echo"<td><font color='black'>". $test['depName']. "</font></td>";
				//echo"<td><font color='black'>". $test['major']. "</font></td>";
				//echo"<td><font color='black'>". $test['coursetitle']. "</font></td>";
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
				<tr>
                        <td colspan=8 >
						</form>

<form method="post" action="">
<input type="submit" name="addstudsem" value="SAVE" class="btn" />
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
										$dep=$test['depID'];
										$major=$test['major'];
										$courseID=$test['courseID'];
															
																			
									 mysql_query("INSERT INTO `persection`(studentID,year,section,depID) 
									 VALUES ('$studentID','$year','$section','$dep')"); 
											}
											mysql_query('TRUNCATE TABLE studsemtemp;')
											or die(mysql_error());
											echo "<h3>One record saccefully added ! <a style=color:red href=view_stud_info.php>Click here !!!</a> </h3>";
											//echo "<a href=view_stud_info.php>Click here !!!</a>";
											//header("Location: view_stud_info.php");
										}
							?>
</form>
                        </td>
                </tr>
				
				
        </tfoot>
		
</table>


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







