<?php session_start();
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html  >
<html>
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
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

<title>View students Information</title>



<style type="text/css">
<!--
.style7 {color: #006600}
-->
</style>
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
<div id="templatemo_content_right" style="margin-right: 132px;">
	<h1>View Student's Information</h1>
	
	<center>		  
<form method="post">
	<input type="text" 
			name="search" 
			value="ID NUMBER" 
			
			onclick="if(this.value=='ID NUMBER'){this.value=''}" 
			onblur="if(this.value==''){this.value='ID NUMBER'}" 
			style="font-style:italic" />
	<input type="submit" name="search" value="search" class="btn" />
</form>


<?php include('db.php');
				
				if(isset($_POST['search']))
				{
				
				$idnum = $_POST['search'];
				$schyr = $_POST['schyr'];
				$sem = $_POST['sem'];
				
				$resultses = mysql_query("SELECT * FROM studsem WHERE studentID = '$idnum' ");
		
				$i=0;
				
				while($rowses = mysql_fetch_array($resultses))
 				 {
				 if(($i%2)==0) 
								{
									$bgcolor ='#ffffff';
								}
							else
								{
									$bgcolor ='#fbf2d9';
								}
				 $id = $rowses['studSemID'];
				 
				 echo "<br>";
				 echo "<table border='1' width='800'>";
				 echo "<tr bgcolor='#eeeeee'>";
				 echo "<th style='width: 195px;'><font color='green'>School YR</font></th>";
				 echo "<th style='width: 500px;'><font color='green'>Semester</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Yr &amp; Sec</font></th>";
				// echo "<th style='width: 195px;'><font color='green'>Program</font></th>";
				// echo "<th style='width: 500px;'><font color='green'>Major</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Course</font></th>";
				 	 echo "<th style='width: 195px;'><font color='green'>Mark</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Grades</font></th>";
				// echo "<th style='width: 195px;'><font color='green'>Remarks</font></th>";
			
				 echo "</tr>";
				 echo "<tr bgcolor='#f7f6c9'>";
				 echo "<td><strong><center><font color='green'>".$rowses['schyr']."</font></center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['sem']."</font></center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['year']."-".$rowses['section']."</font></center></strong></td>";
				// echo "<td><strong><center><font color='green'>".$rowses['program']."</font></center></strong></td>";
				// echo "<td><strong><center><font color='green'>".$rowses['major']."</font></center></strong></td>";				
				 
				 $resulta=mysql_query("SELECT  course.coursetitle FROM studsem LEFT JOIN course ON studsem.courseID=course.courseID WHERE studSemID='$id'");
				while($testsa = mysql_fetch_array($resulta))
				{
				echo"<td><strong><center><font color='green'>". $testsa['coursetitle']. "</font></strong></td>";
				}
				 echo "<td><strong><center><font color='green'>".$rowses['mark']."</center></strong></td>";
				
				 echo "<td><strong><center><font color='green'>".$rowses['grades']."</center></strong></td>";
				// echo "<td><strong><center><font color='green'>".$rowses['remarks']."</center></strong></td>";
				 
				 echo "</tr>";
				 echo "</table>";
				 echo "<br>"; 
				 }
				 }
				
				
			?>	


<!-- 
if(isset($_POST['next'])){

$idnum = $_POST['idnum'];

$search = mysql_query("SELECT * FROM student.UserName WHERE UserName LIKE '%$idnum%' ") 
				or die (mysql_error());
				
 -->
</center><br />
       	  
		   <!--  <table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="700" bgcolor="#FFFFFF">
        <thead >
                <tr>
                        <th sort="index"><span class="style7">ID/username</span></th>
                        <th sort="date"><span class="style7">Password</span></th>
                        <th sort="description"><span class="style7">Name</span></th>
                        <th sort="beds"><span class="style7">Gender</span></th>
                     <th sort="maxGuests"><span class="style7">Program</span></th> -->
                       
						
                </tr>
        </thead>
        <tbody>
		
        
			<?php 
		include ("db.php");
		$result=mysql_query("SELECT student.UserName, student.Password, student.firstname,student.middlename, student.lastname, student.gender, program.programtitle FROM student LEFT JOIN program ON student.programId=program.programId ORDER BY UserName ASC ");
		
		while($test = mysql_fetch_array($result))
		
		{
				$_SESSION['dis']=$test['UserName'];
				$studid=$_SESSION['dis'];
				
				echo "<tr align='center'>";	
				
			/*	echo"<td><a href='sample2.php?id=$studid'><font color='black'>". $test['UserName']. "</font></a></td>";
				echo"<td><a href='sample2.php?id=$studid'><font color='black'>". $test['Password']. "</font></a></td>";
				echo"<td><a href='sample2.php?id=$studid'><font color='black'>". $test['firstname'].'&nbsp;'.$test['middlename'].'&nbsp;'.$test['lastname']. "</font></a></td>";
				echo"<td><a href='sample2.php?id=$studid'><font color='black'>". $test['gender']. "</font></a></td>";
				echo"<td><a href='sample2.php?id=$studid'><font color='black'>". $test['programtitle']. "</font></a></td>";	*/
				
												
				echo "</tr>";
			}
			mysql_close($conn);
			?>
    
        </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=5 ><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle"></div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
								</font>
                        </td>
                </tr>
        </tfoot>
</table>
	 <br />
	
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
