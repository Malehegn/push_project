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
<title>Add Student's Grade Per Section</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="templatemo_container">
	<div id="nav">
    	<?php include('include/header.php')?>
    </div> <!-- end of menu -->
    
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
       	  <form id="form1"  method="post" action="">
		  <h1> Add Student's Grade Per Section </h1>
		  <table border="0" >
		  	
			<tr>
				<td>School Year:</td>
				<td><input type="text" name="school_yr" /></td>
				<td>Program:</td>
				<td>
				<form method="post" >
						
						<select  name="program" style="width: 148px;">
							  <option>---Select Program---</option>		
							  <?php
		  		include ("db.php");
				$result = mysql_query("SELECT * FROM program ORDER BY programId");
				while($test = mysql_fetch_array($result))
				{
				if (!$result)
					{
					die("Error: Data not Found. . ");
					}
				echo "<option value=".$test['programId'].">".$test['programtitle']."</option>";
				}
					mysql_close($conn);
				 ?>
						  </select>
				</form>	
				</td>		
			</tr>
		  	
			<tr>
				<td>Major:</td>
				<td>
					<form method="post" >
			
					<select  name="major" style="width: 148px;">
						  <option>---Select major---</option>		
						  <?php
						  		include ("db.php");
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
				</form>	
				</td>	
				<td>Course Code:</td>
				<td>
					<form method="post" >
					<select  name="course" style="width: 148px;">
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
				</form>	
				</td>							
			</tr>
			
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
			
				<td>Semester</td>
				<td>
					<select name="semester" style="width: 148px;">
						<option>---Select Semester---</option>
						<option>1st Semester</option>
						<option>2nd Semester</option>
											
					</select>
				</td>		
			<tr>
				<td>Section</td>
				<td>
					<select name="section">
					<option>--Select Section--</option>
					<option>A</option>
					<option>B</option>
					<option>C</option>
					<option>D</option>
				
				</select>
				</td>		
			</tr>
			
				<td>&nbsp;</td>
				<td><input type="submit" name="viewcourse" value="Filter" class="btn" /></td>	
				 
			</tr>
		  </table>
		  <br /><br /><br />
		  <table id="demoTable" style="border: 1px solid rgb(204, 204, 204); table-layout: fixed; margin-left: -117px;" cellspacing="0" width="700" bgcolor="#FFFFFF">
        <thead >
                <tr>
						<th sort="index"><span class="style7">Student Name</span></th>
                        <th sort="index"><span class="style7">SchoolYr</span></th>
                        <th sort="date"><span class="style7">Sem</span></th>
                        <th sort="description"><span class="style7">Course ID</span></th>
                        <th sort="beds"><span class="style7">Description</span></th>
						<th sort="beds"><span class="style7">Units</span></th>
						<th sort="beds"><span class="style7">Grades</span></th>
						<th sort="beds"><span class="style7">Remarks</span></th>
				</tr>
        </thead>
        <tbody>
	
	
	</tbody>
	 <?php 
				include('db.php');
				
				if(isset($_POST['viewcourse']))
				{
		
				$school_yr = $_POST['school_yr'];
				$semester= $_POST['semester'];
				$program = $_POST['program'];
				$major = $_POST['major'];
				$course = $_POST['course'];
				$year = $_POST['year'];
				$semester = $_POST['semester'];
				$section = $_POST['section'];
				
				$result = mysql_query("SELECT * FROM studsem 
										WHERE schyr = '$school_yr' AND 
												sem = '$semester' AND 
												year = '$year' AND 
												section = '$section' AND 
												program = '$program' AND 
												major = '$major' AND
												courseID = '$course'");
  				
				
				
				while($test = mysql_fetch_object($result))
 				 {
		         echo "<tr>";
				echo"<td><font color='black'>" .$test['schyr']."</font></td>";
				echo"<td><font color='black'>" .$test['sem']."</font></td>";
				echo"<td><font color='black'>" .$test['year']."</font></td>";
				echo"<td><font color='black'>" .$test['section']."</font></td>";
				echo"<td><font color='black'>" .$test['program']."</font></td>";
				echo"<td><font color='black'>" .$test['major']."</font></td>";
				echo"<td><font color='black'>" .$test['courseID']."</font></td>";
				echo "</tr>";
				}

				
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
		     
</div> 
	
        <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
  </div> <!-- end of content -->
    
  <div id="templatemo_footer">
      <?php include('include/footer.php')?>
  </div>  
    
</div> <!-- end of container -->
</body>
</html>