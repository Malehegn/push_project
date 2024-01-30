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
		<script type="text/javascript" >
			 function noMore(){
			
				 $year=document.getElementById("yr").value;
				 $sec=document.getElementById("sec").value;
				
				 $dep=document.getElementById("dep").value;
				 
			
				if($dep == '--Select Department--'){
					 alert("Please choose Department !!!");
					
					 return false;
				 }
				 else if($year == '---Select Year---'){
					 alert("Please choose students year !!!");
					
					 return false;
				 }
				  else if($sec == '--Select Section--'){
					 alert("Please choose students Section !!!");
					
					 return false;
				 }
			
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
<title>Add Teacher: Step 2</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<body>


<div id="templatemo_container">
	<div id="nav">
    	<?php include('include/header.php')?>
    </div><!-- end of menu -->
    
    <div id="templatemo_header">
   	  <div id="templatemo_special_offers" style="margin-left: 650px; margin-top: 85px; width: 254px;">
   	    <p align="center" class="style4">Welcome </p>
       	  <p align="center" class="style4">Administrator</p>
   	  </div>
  </div>
    <!-- end of header -->
    
    <div id="templatemo_content">
      <!-- end of content left -->
      <div id="templatemo_content_right">
	   <h1>Step 2: Add Teacher's Load Per Semester</h1>
	 
	  <form method="post">
	  <table>
	  
		<tr>
		<td>Department:</td>
			<td>
			<select  name="tloaddep" style="width: 148px;">
			<option>--Select Department--</option>	
				 <?php
		  		include ("db.php");
				$result = mysql_query("SELECT * FROM department ORDER BY depID");
				while($test = mysql_fetch_array($result))
				{
				if (!$result)
					{
					die("Error: Data not Found. . ");
					}
				echo "<option value=".$test['depID'].">".$test['depName']."</option>";
				}
					mysql_close($conn);
				 ?>
		 </select>
			</td> 
			<td>Year: </td>
			<td>
				<select name="yr">
					<option>--Select Year--</option>
					<option>I</option>
					<option>II</option>
					<option>III</option>
					<option>IV</option>
			
					
				</select>
			</td>
			<td>&nbsp;</td>
			<td>Section: </td>
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
		<tr>
		
		</tr>
		<tr>
		
			<td>&nbsp;</td>
			<td><input type="submit" class="btn" name="addtload" value="Add Teacher's Load" /></td>
		</tr>
	  </table>
<?php
if (isset($_POST['addtload']))
	{	   
	include 'db.php';
	
	$id=$_SESSION['teacherid'];
	$tloaddep=$_POST['tloaddep'] ;
	//$major=$_POST['major'] ;
	$yr=$_POST['yr'] ;
	$section=$_POST['section'] ;
				 		
	mysql_query("INSERT INTO tloadtemp  (teacherid ,year, section,depID) VALUES ('$id','$yr','$section','$tloaddep')"); 
	}
?>

	  </form>
	   <br /><br /><br />
	 <table id="demoTable" style="border: 1px solid #ccc; margin-left: -161px;" cellspacing="0" width="700" bgcolor="#FFFFFF">
        <thead >
                <tr>
                        <!--<th sort="description"><span class="style7">Program</span></th> -->
                        <th sort="description"><span class="style7">Department</span></th> 
                        <th sort="beds"><span class="style7">Year</span></th>
						<th sort="beds"><span class="style7">Section</span></th>
						<th sort="beds"><span class="style7">Delete</span></th>
				</tr>
        </thead>
        <tbody>
	
	
		</tbody>
	       <?php
			include("db.php");
			
			$result=mysql_query("SELECT tloadtemp.tloadtempID, tloadtemp.major, tloadtemp.section, tloadtemp.year, department.depName FROM tloadtemp LEFT JOIN department ON tloadtemp.depID=department.depID ");
				
					
			while($test = mysql_fetch_array($result))
		{
				$ids = $test['tloadtempID'];	
				echo "<tr align='center'>";	
				echo"<td><font color='black'>". $test['depName']. "</font></td>";
				//echo"<td><font color='black'>". $test['major']. "</font></td>";	
				echo"<td><font color='black'>". $test['year']. "</font></td>";		
				echo"<td><font color='black'>". $test['section']. "</font></td>";
				echo"<td> <a href ='del_teacher_info_step2(code).php?tloadtempID=$ids'><center><img src='images/9.png'></center></a></td>";
				
				echo "</tr>";
		}	
	?>
	   
		
		 </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=5 ><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle">Page</div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
								</font>
                        </td>
                </tr>
				<tr>
                        <td colspan=5 >
						<form method="post">
						<input type="submit" name="addtcourse" value="Click here to Proceed to the next Step" class="btn" />
							<?php
								if (isset($_POST['addtcourse']))
											{
											include("db.php");
											
										$result=mysql_query("SELECT * FROM tloadtemp");			
										while($test = mysql_fetch_array($result))
										{
												
										$teacherid=$test['teacherid'];
										$depId=$test['depID'];
										//$major=$test['major'];
										$year=$test['year'];
										$section=$test['section'];
															
										 mysql_query("INSERT INTO `tdep`(teacherID,depID) 
									 VALUES ('$teacherid','$depId')");									
									 mysql_query("INSERT INTO `tload`(teacherid,year,section) 
									 VALUES ('$teacherid','$year','$section')"); 
											}
											mysql_query('TRUNCATE TABLE tloadtemp;')
											or die(mysql_error());
											
											//header("Location: add_teacher_info_step3.php");
											echo "<p style=color:black><strong>One record succefully added</strong>";
													echo"<a style=color:blue href=add_teacher_info_step3.php> Click here to next step</a></P>";
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