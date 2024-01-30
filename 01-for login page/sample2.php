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
<title>Add Student's Grade individualy</title>
<meta name="keywords"  />
<meta name="description" />
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
	   <h1> Add Student's Grade Individually </h1>
	<br />
	   <?php
	   include('db.php');
	   $studentID=$_GET['id'];
	   
	   $uh=mysql_query("SELECT * FROM student WHERE UserName='$studentID'");
	   $eh = mysql_fetch_array($uh);
	   $aydee=$eh['studentID'];
	    ?>
	 <div style="float:left">
	 	<table border="1" style="margin-left: -118px;">
		<tr><td><?php echo "<img src='images/photos/".$eh['uploadphoto']."' height='156' width='190' />"; ?></td></tr>
		</table>
	 </div>
	 
	 	<table>
			<tr>
				<td style="width:99px">NAME:</td>
				<td><?php echo $eh['firstname']." ".$eh['middlename']." ".$eh['lastname']?></td>
			</tr>
			<tr>
				<td>ID NUMBER:</td>
				<td><?php echo $eh['UserName']?></td>
			</tr>
			<tr>
				<td>GENDER:</td>
				<td><?php echo $eh['gender']?></td>
			</tr>
			<tr>
				<td>BIRTHDATE:</td>
				<td><?php echo $eh['dateofbirth']?></td>
			</tr>
			<tr>
				<td>BIRTHPLACE:</td>
				<td><?php echo $eh['placeofbirth']?></td>
			</tr>
			<tr>
				<td>:::::::::::::</td>
				<td> <?php echo $eh['terschool'].",".$eh['teradd'].",".$eh['terschyr']?> </td>
			</tr>
			<tr>
				<td>SECONDARY:</td>
				<td><?php echo $eh['secschool'].",".$eh['secadd'].",".$eh['secschyr']?></td>
			</tr>
			<tr>
				<td>PRIMARY:</td>
				<td><?php echo $eh['elemschool'].",".$eh['elemadd'].",".$eh['elemschyr']?></td>
			</tr>			
		</table><br />
	  
		<form method="post" action="update2.php"  style="margin-left: -118px;">
		
		
		 <table id="demoTable" style="border: 1px solid rgb(204, 204, 204); table-layout: fixed; " cellspacing="0" width="550" bgcolor="#FFFFFF">
        <thead >
                <tr>	
						<th sort="beds" align="center" style="width: 15px;"><span class="style7"></span></th>	 
						<th sort="beds" align="center" style="width: 145px;"><span class="style7">SchoolYR</span></th>
						<th sort="beds" align="center" style="width: 70px;"><span class="style7">SEM</span></th>
						<th sort="beds" align="center" style="width: 51px;"><span class="style7" >YR&SEC </span></th>
						<!--<th sort="beds" align="center" style="width: 65px;"><span class="style7">PROG</span></th>						
                       	<th sort="beds" align="center" style="width: 87px;"><span class="style7">MAJOR</span></th> -->
						<th sort="beds" align="center" style="width: 61px;"><span class="style7">COURSE</span></th>
							<th sort="beds" align="center" style="width: 15px;"><span class="style7"></span></th>
						<th sort="beds" align="center" style="width: 50px;"><span class="style7">MARK</span></th>
						<th sort="beds" align="center" style="width: 85px;"><span class="style7">Remarks</span></th>
						
						
				</tr>
        </thead>
        <tbody>
		<?php
			include("db.php");
			$result=mysql_query("SELECT * FROM studsem WHERE studentID ='$aydee' ORDER BY schyr ASC, sem") or die(mysql_error());
			$i=0;
			while($test = mysql_fetch_array($result))
			{
				$id = $test['studSemID'];	
				echo "<tr align='center'>";
				echo "<td><font color='black'><input type='hidden' name='studSemID[$i]' value='{$test['studSemID']}' /></font></td>";				
				echo"<td><font color='black'>". $test['schyr']. "</font></td>";
				echo"<td><font color='black'>". $test['sem']. "</font></td>";
				echo"<td><font color='black'>". $test['year'].'-'. $test['section']. "</font></td>";
				//echo"<td><font color='black'>". $test['program']. "</font></td>";
				//echo"<td><font color='black'>". $test['major']. "</font></td>";
				?>
				
				<?php
		include ("db.php");
		
	$results=mysql_query("SELECT  course.coursetitle, course.hrsperweek FROM studsem LEFT JOIN course ON studsem.courseID=course.courseID WHERE studSemID='$id'");
		
		while($row = mysql_fetch_array($results))
		{
		echo"<td><font color='black'>". $row['coursetitle']. "</font></td>";
	echo "<td><font color='black'><input type='hidden' name='ects[$i]' value='{$row['hrsperweek']}' /></font></td>";
		
		
		}
				
				echo"<td><input type='text' name='mark[$i]' id='mar' maxlength='3' onKeyPress='return isNumberKey(event)' style='width: 35px;' value='" .$test['mark']. "'/></td>";
				echo"<td>
					<select name='remarks[$i]'>
						<option>".$test['remarks']."</option>
						<option>Passed</option>
						<option>Failed</option>
						<option>Dropped</option>
					</select>
					</td>";
						++$i;
												
				echo "</tr>";
			}
			mysql_close($conn);
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
				<td colspan=9><input type="submit" value="UPDATE ALL" onclick="return noMore1()" name="btnupdate" class="btn" /></td>
			</tr>
        </tfoot>
			
</table>
	  </form><br />
	<p></p><p></p>
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