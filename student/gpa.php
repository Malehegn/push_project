<?php 
	session_start();
?>
<?php
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}

 ?>
<!DOCTYPE html>
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png"  /> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student's Form</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="coda-slider.css" rel="stylesheet" type="text/css" media="screen" title="no title" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
<script language="JavaScript" type="text/javascript" src="jTPS.js"></script>		
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
<style>
input.btn {
	color:#FFFFFF;
	font: bold small 'trebuchet ms',helvetica,sans-serif;
	/*background-color: #CC0033;*/
	border:1px solid;
	border-color: #330099 #330099 #330099 #330099;
	background-image: url(images/bg_on_button.jpg);
	
} 
.style1 {
	color: #d1e050;
	font-style: italic;
}
.style4 {color: #FFFFFF; font-style: italic; }
.style5 {color: #d1e050}
.style7 {font-style: italic}
.style10 {color: #FFFFFF}
.style11 {color: #CCCCCC; }
</style>
</head>
<body>
	
    <div id="slider">
    	
        <div id="header">
        	<div id="sitetitle">
	        	<a href="#"><img src="images/logo.png" alt="LOGO" /></a>
            </div>
                 <a class="header_menu" href="logout.php"><img src="images/contactus.png" alt="contact us" style="margin-left: 264px;" /></a>
        </div>
        
        <div id="content">
        
            <div class="scroll">
                <div class="scrollContainer">
				
				<!-- for home ------------------------------------------------------------------------------------------------------------------------------------------>
                
                   
                    
                    
					<!-- for Grades --------------------------------------------------------------------------------------------------------------------------------->
					
                    <div class="panel" id="services">
					<div id="gallery_container">
			
                    	<div class="col_380 float_l">
                        	<h1>GPA Overview</h1>
							<h3><a href="home.php"> HOME </a> </h3>
							<center>
							<form method="post" action="#services">
							<table align="center" style="margin-left: 96px;">
								<tr>
								
									<td>In</td>
									<td><input type="text" 
										name="schyr" 
										value="School Year" 
									
										onclick="if(this.value=='School Year'){this.value=''}" 
										onblur="if(this.value==''){this.value='School Year'}" 
										style="font-style:italic" />
									</td><td>And</td> 
									<td><select name="sem">	
										<option>---Select Semester---</option>						
										<option >1st Semester</option>
										<option>2nd Semester</option>
										<!--<option>Summer Semester</option>-->
										</select>
									</td>
									<td><input type="submit" name="search" value="Search" /></td>
								</tr>
							</table>
							</form>
<?php include('db.php');
				
				if(isset($_POST['search']))
				{
				
				$course = $_POST['course'];
				$schyr = $_POST['schyr'];
				$sem = $_POST['sem'];
				$id1 =$_SESSION['userid'];
				
				$resultses = mysql_query("SELECT * FROM studsem WHERE schyr = '$schyr' AND sem = '$sem' AND studentID = '$id1' ");
				echo "<br>";
				 echo "<table width='800'>";
				 echo "<tr bgcolor='#eeeeee'>";
				// echo "<th style='width: 195px;'><font color='green'>School YR</font></th>";
				// echo "<th style='width: 500px;'><font color='green'>Semester</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Yr &amp; Sec</font></th>";
				
				 echo "<th style='width: 195px;'><font color='green'>Course</font></th>";
				 	 echo "<th style='width: 195px;'><font color='green'>Mark</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Grades</font></th>";
				 echo "</tr>";
		
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
				 $semgp=$rowses['gradepnt'];
				 $sum0 += $semgp;
				
                 $semects=$rowses['ects'];
	
		         $sum1 += $semects;
				 
				 $gpa=$sum0/$sum1;
				 
				/* echo "<br>";
				 echo "<table width='800'>";
				 echo "<tr bgcolor='#eeeeee'>";
				// echo "<th style='width: 195px;'><font color='green'>School YR</font></th>";
				// echo "<th style='width: 500px;'><font color='green'>Semester</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Yr &amp; Sec</font></th>";
				
				 echo "<th style='width: 195px;'><font color='green'>Course</font></th>";
				 	 echo "<th style='width: 195px;'><font color='green'>Mark</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Grades</font></th>";
				 echo "</tr>";
			*/
				
				 echo "<tr bgcolor='#f7f6c9'>";
				// echo "<td><strong><center><font color='green'>".$rowses['schyr']."</font></center></strong></td>";
				// echo "<td><strong><center><font color='green'>".$rowses['sem']."</font></center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['year']."-".$rowses['section']."</font></center></strong></td>";
						
				 
				 $resulta=mysql_query("SELECT  course.coursetitle FROM studsem LEFT JOIN course ON studsem.courseID=course.courseID WHERE studSemID='$id'");
				while($testsa = mysql_fetch_array($resulta))
				{
				echo"<td><strong><center><font color='green'>". $testsa['coursetitle']. "</font></strong></td>";
				}
				 echo "<td><strong><center><font color='green'>".$rowses['mark']."</center></strong></td>";
				
				 echo "<td><strong><center><font color='green'>".$rowses['grades']."</center></strong></td>";
				
				 
				 echo "</tr>";
				 echo "</table>";
				 
				 echo "<br>"; 
				 }
				 } 

				
				 $round1=round($gpa,2);
				 echo "<h4>Your GPA for this semister=$round1 </h4>";
				
				
			?>	

							
			</center><br />				
							
   
        <tfoot class="nav">
                <tr>
                        <td colspan=8><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle"></div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
								</font>
                        </td>
                </tr>
		 </tfoot>
</table>



</p>
                         
                        </div>
                        
					  </div>
		   
                    </div>
					
                <!------ for Password --------------------------------------------------------------------------------------------------------------------------------------->



				
                    <div class="panel" id="gallery">
                       
						<center>
                        
                        <div id="gallery_container" align="left">
						
								
						<fieldset style="width: 553px; margin-left: 131px;">
							
						</fieldset>
					</form>		  			  
                            <div class="cleaner"></div>
						
                        </div>
                </center>
                    </div>
					
					
                <!-- for The developer ---------------------------------------------------------------------------------------------------------------------------------------->
				
                    <div class="panel" id="contactus">
					<div id="gallery_container">
					<div align="center">
					
					<script type="text/javascript" src="gallery/js/swfobject.js"></script>
					<script type="text/javascript" src="gallery/js/flashgallery.js"></script>
					<script type="text/javascript">
					jQuery.flashgallery('gallery/gallery.swf', 'gallery/config.json', { width: '450px', height: '320px', background: 'transparent' });
					</script>
					</div>
					</div>
                        
                        
                        <div class="cleaner_h10"></div>
                                                
                        <div class="col_380 float_l">
                        
                            <div id="contact_form">
                            
                               
                                
                            </div>
                            
						</div>
                        
                        
                        
                	</div>
                    
                </div>
            </div>
            
            <!-- end of scroll ------------------------------------------------------------------------------------------------------------------------------------------>
        
        </div>
        
        <div id="menu">
            <ul class="navigation">
                <li><a href="home.php" >Home<span class="ui_icon home"></span></a></li>
                
            </ul>
        </div>
        
        <div id="footer">
        
       	Copyright © 2008 <a href="#">University of Gondar Registar </a> ||<a href="#">Online grading system</a> 
		</div>
    
    </div> <!-- end of slider -->

</body>
</html>