<?php session_start();?>
<?php
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html>
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
			
				 $co=document.getElementById("co").value;
				 $sem=document.getElementById("sem").value;
				
				
				 
			
				if($co == '--Select Course--'){
					 alert("Please choose Course !!!");
					
					 return false;
				 }
				 else if($sem == '--Select Semester--'){
					 alert("Please choose Semister !!!");
					
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
<html>
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add student: Step 3 : Course</title>

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
      <div id="templatemo_content_right" style="width: 650px;">
	  <br />
	  <h1>Step 3: Add Teacher's Course Per Semester</h1>
	  <form method="post" action="">
	  <table>
	  	<tr>
			<td>Course Title:</td>
			<td>
			<select id="co" name="coursetitle" style="width: 148px;">
								  <option>--Select Course--</option>	
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
				<td>School Year:</td>
				<td><input type="text" maxlength ="4" onkeypress= "return isNumberKey(event)" name="schyr" required /></td>
			</tr>
			<tr>
				<td>Semester:</td>
				<td>
				<select id="sem" name="sem">
				<option>--Select Semester--</option>
				<option>1st Semester</option>
				<option>2nd Semester</option>
			
				
				</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="addcourse" onclick="return noMore()" value="ADD Course" class="btn" /></td>
			</tr>
	  </table>
<?php
if (isset($_POST['addcourse']))
	{	   
	include 'db.php';
					$id=$_SESSION['teacherid'];
					$coursetitle=$_POST['coursetitle'] ;			 		
					$schyr= $_POST['schyr'] ;					
					$sem=$_POST['sem'] ;
												
		 mysql_query("INSERT INTO `tcoursetemp`(teacherid,courseID,schyr,semester) 
		 VALUES ('$id','$coursetitle','$schyr','$sem')"); 
				
						
	        }
?>

	  </form>
	  
	  <br /><br /><br />
	 <table id="demoTable" style="border: 1px solid #ccc; margin-left: -161px;" cellspacing="0" width="700" bgcolor="#FFFFFF">
        <thead >
                <tr>
                        <th sort="description"><span class="style7">Course Title</span></th>
						<th sort="beds"><span class="style7">Description</span></th>
						<!--<th sort="beds"><span class="style7">Pre-requisite</span></th> -->
						<th sort="beds"><span class="style7">Hrs/WK</span></th>
						<!--<th sort="beds"><span class="style7">Unit</span></th> -->
                        <th sort="description"><span class="style7">School Year</span></th>
                        <th sort="beds"><span class="style7">Semester</span></th>
						<th sort="beds"><span class="style7">Delete</span></th>
					
				</tr>
        </thead>
        <tbody>
	
	
	</tbody>
	   <?php
			include("db.php");
			
			$result=mysql_query("SELECT tcoursetemp.tcoursetempID,tcoursetemp.schyr, tcoursetemp.semester, course.coursetitle, course.coursedescription, course.prerequesit, course.hrsperweek, course.unit FROM tcoursetemp LEFT JOIN course ON tcoursetemp.courseID=course.courseID");
				
					
			while($test = mysql_fetch_array($result))
		{
				$ids = $test['tcoursetempID'];	
				echo "<tr align='center'>";				
				echo"<td><font color='black'>". $test['coursetitle']. "</font></td>";
				echo"<td><font color='black'>". $test['coursedescription']. "</font></td>";
				//echo"<td><font color='black'>". $test['prerequesit']. "</font></td>";
				echo"<td><font color='black'>". $test['hrsperweek']. "</font></td>";
				//echo"<td><font color='black'>". $test['unit']. "</font></td>";
				echo"<td><font color='black'>". $test['schyr']. "</font></td>";
				echo"<td><font color='black'>". $test['semester']. "</font></td>";
				echo"<td> <a href ='del_teacher_info_step3(code).php?tcoursetempID=$ids'><center><img src='images/9.png'></center></a></td>";
				
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
						<form  method="post">
						<input type="submit" name="addtcourse" value="Click here to Proceed to next Step" class="btn" />
						<?php
								if (isset($_POST['addtcourse']))
											{
											include("db.php");
											
										$result=mysql_query("SELECT * FROM tcoursetemp");			
										while($test = mysql_fetch_array($result))
										{
												
										$teacherid=$test['teacherid'];
										$courseID=$test['courseID'];
										$schyr=$test['schyr'];
										$semester=$test['semester'];
																									
																			
									 mysql_query("INSERT INTO `tcourse`(teacherid,courseID,schyr,semester) 
									 VALUES ('$teacherid','$courseID','$schyr','$semester')"); 
											}
											mysql_query('TRUNCATE TABLE tcoursetemp;')
											or die(mysql_error()); 	
											echo "<p></p>";			
											//header("Location: view_teacher.php");
											echo "<p style=color:black><strong>Teachers' information successfully added </strong>";
											echo "<a style=color:blue href=view_teacher.php> View teacher info</a> </P>";
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