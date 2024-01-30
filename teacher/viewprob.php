<?php session_start();?>
<?php
	if (!isset($_SESSION['Tuserid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
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
		 <script>

                $(document).ready(function () {
               
                        $('#demoTables').jTPS( {perPages:[5,12,15,50,'ALL'],scrollStep:1,scrollDelay:30,
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
                        $('#demoTables tbody tr:not(.stubCell)').bind('mouseover mouseout',
                                function (e) {
                                        // hilight the row
                                        e.type == 'mouseover' ? $(this).children('td').addClass('hilightRow') : $(this).children('td').removeClass('hilightRow');
                                }
                        );

                });


        </script>		
<!DOCTYPE html>
<html>

        <style>
                
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
<link rel="icon" href="images/chmsc.png" type="image/png"> 
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
						<h2 class="title"><font color="#E44D32"><strong>View Student Problem</strong></font></h2>
						<p class="meta"><span class="date">
															<?php $date= date("l, F d, Y");
																/*echo " <font color ='black'>";*/
																echo $date ;
																echo "  &nbsp; "
															?> 
		</span><span class="posted">&nbsp;</span></p>
						<div style="clear: both;">&nbsp;</div>
						
						<div class="entry"><p>
						
<table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="550" bgcolor="#FFFFFF">
        <thead >
                <tr>
				    <th sort="date" align="center"><span class="style7">Course</span></th>
                        <th sort="index" align="center"><span class="style7">Student</span></th>
                    
                        <th sort="description" align="center"><span class="style7">Problem</span></th>
						   <th sort="description" align="center"><span class="style7">Confirm</span></th>
						
                       
						
                </tr>
        </thead>
        <tbody>
		   <?php
			include("db.php");
			$id =$_SESSION['Tuserid'];
			$result=mysql_query("SELECT * FROM report WHERE teacherid ='$id' AND status=0");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
				
				$courseid=$test['courseID'];
					$getcourse=mysql_query("SELECT * FROM course WHERE courseID='$courseid'") or die(mysql_error());
					$getthis=mysql_fetch_array($getcourse);
			
				echo"<td><font color='black'>". $getthis['coursetitle']. "</font></td>";
				$studid=$test['studentID'];
					$getstudent=mysql_query("SELECT * FROM student WHERE studentID='$studid'") or die(mysql_error());
					$getthis1=mysql_fetch_array($getstudent);
				echo"<td><font color='black'>". $getthis1['firstname']." ".$getthis1['middlename']."</font></td>";
				echo"<td><font color='black'>". $test['problem']. "</font></td>";
				echo"<td> <a href ='confirm.php?id=$id'><img src='images/8.png'></a>";
				echo "</tr >";	
			
			}
			mysql_close($conn);
			?>

        </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=3 ><font color="#000000">
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

        <tfoot class="nav">
                <tr>
                        <td colspan=4 ><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle"></div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
								</font>
                        </td>
                </tr>
        </tfoot>
</table>	
<p>&nbsp;</p>
</p>
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
							<li><a href="not.php">Notification</a></li>
								<li><a href="teachload.php">Load</a></li>
							<li><a href="teachgrade2.php">Add Grades</a></li>
							<li><a href="persection.php">ADD grade per_section</a></li>
								<li class="current_page_item"><a href="#">View Problems</a></li>
							<li><a href="teachupgrade.php">User's Manual</a></li>
							<li><a href="teachchangepass.php">Change Password</a></li>
							<li><a href="logout.php">Log-out</a></li>
						</ul>
					</div>
					<ul>
						<li>
							<div id="search" >
								<form method="get" action="http://www.google.com.ph/search" target="_blank">
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
	<p>Copyright (c) 2008 University of Gondar. All rights reserved.</p>
</div>
<!-- end #footer -->
</body>
</html>
