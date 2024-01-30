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
		<script type="text/javascript">
		 function noMore1(){
			 $mark=document.getElementById("mar").value;
			 
				  if($mark > 100){
					 alert("please enter Valid mark !!! mark can't be greater than 100");
					
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
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Student's Grade Per Section</title>

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
	   <h1> Update Student's Grade Per Section(Final) </h1>
	  <form method="post">
	  <table>
	  <tr>
		<td>School Year:</td>
		<td><input type="text" style="width:148px" name="schyr" maxlength="4" onkeypress="return isNumberKey(event)" /></td>
	  	<td>&nbsp;</td>
			
		<td>Section:</td>
				<td>
					<select name="sec">
					<option>--Select Section--</option>
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
		</td>
			<td>&nbsp;</td>
				<td>Semester</td>
				<td>
					<select name="semester" style="width: 148px;">
						<option>---Select Semester---</option>
						<option>1st Semester</option>
						<option>2nd Semester</option>
										
					</select>
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
				
			</tr>
			<tr>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td><input type="submit" value="CLICK HERE TO FILTER" name="sheet" class="btn" /></td>
		</tr>
		</table>
		</form>
		<form method="post" action="update.php"  style="margin-left: -118px;">
		
		
		 <table id="demoTable" style="border: 1px solid rgb(204, 204, 204); table-layout: fixed; margin-left: 72px;" cellspacing="0" width="550" bgcolor="#FFFFFF">
        <thead >
                <tr>	
						<th sort="beds" align="center" style="width: 145px;"><span class="style7">name</span></th>
						
						<th sort="beds" align="center" style="width: 70px;"><span class="style7">Course</span></th> 
							<th sort="beds" align="center" style="width: 1px;"><span class="style7"></span></th>
						<!--<th sort="beds" align="center" style="width: 29px;"><span class="style7" >ID</span></th> -->
						<th sort="beds" align="center" style="width: 65px;"><span class="style7">SchYr</span></th>
						
                       	<th sort="beds" align="center" style="width: 87px;"><span class="style7">YR,SEC</span></th>
						<th sort="beds" align="center" style="width: 43px;"><span class="style7">Mark</span></th>
						<th sort="beds" align="center" style="width: 85px;"><span class="style7">Remarks</span></th>
						
						
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
				
				 
				
		$result = mysql_query("SELECT * FROM studsem WHERE schyr = '$schyr'  AND courseID = '$course' AND section = '$section' AND year = '$year' AND sem = '$semester'");
  			
		
				$i=0;
				while($row = mysql_fetch_array($result))
 				 {
				 $id = $row['studSemID'];
				echo "<tr align='center'>";	
				
					$results=mysql_query("SELECT  student.firstname,student.middlename FROM studsem LEFT JOIN student ON studsem.studentID=student.studentID WHERE studSemID='$id'");
				while($tests = mysql_fetch_array($results))
				{
				echo"<td><font color='black'>". $tests['firstname'].'&nbsp;'. $tests['middlename']. "</font></td>";
				}
				
				$resulta=mysql_query("SELECT  course.coursetitle,course.hrsperweek, course.coursedescription FROM studsem LEFT JOIN course ON studsem.courseID=course.courseID WHERE studSemID='$id'");
				while($testsa = mysql_fetch_array($resulta))
				{
				echo"<td><font color='black'>". $testsa['coursedescription']. "</font></td>";
					echo "<td><font color='black'><input type='hidden' name='ects[$i]' value='{$testsa['hrsperweek']}' /></font></td>";
				}
			
				
				echo"<td><font color='black'>". $row['schyr']. "</font></td>";
				echo"<td><font color='black'>".$row['year'].'-'. $row['section']. "</font></td>";				
				echo"<td><input type='text' name='mark[$i]' id='mar' onKeyPress='return isNumberKey(event)' maxlength='3' style='width: 35px;' value='" .$row['mark']. "'/></td>";
				
				echo"<td>
					<select name='remarks[$i]'>
						<option>".$row['remarks']."</option>
						<option>Passed</option>
						<option>Failed</option>
						<option>Dropped</option>
					</select>
					</td>";
					echo "<td><font color='black'><input type='hidden' name='studSemID[$i]' value='{$row['studSemID']}' /></font></td>";
						++$i;
				}
				echo "</tr>";
				
				
				
			
				}
			
			?>
			
				
		 </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=9 ><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle">Page</div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
								</font>
                        </td>
                </tr>
				<tr>
				<td colspan=9><input type="submit" value="SAVE ALL" name="btnupdate" onclick="return noMore1()" class="btn" /></td>
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
    <!-- end of footer -->

</div> <!-- end of container -->
</body>
</html>