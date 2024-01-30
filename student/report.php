<?php 
	session_start();
?>
<?php
	if(!isset ($_SESSION['Suserid']) or $_SESSION['logged'] != 'true'){
	 header('location:C:/wamp/www/online grade/index.php');}

 ?>
<!DOCTYPE html>
<html >
<script type="text/javascript">
function show_confirm()
{
var r=confirm("Are you sure you want to print Grade Sheet?");
if (r==true)
  {
  alert(window.print());
  }
else
  {
  alert("Printing Cancelled!");
  }
}
</script>
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
			
				 $course=document.getElementById("co").value;
				 $teacher=document.getElementById("teach").value;
				
				 $problem=document.getElementById("prob").value;
				 
			
				if($course == '---Select Course---'){
					 alert("Please choose Course !!!");
					
					 return false;
				 }
				 else if($teacher == '---Select Teachers---'){
					 alert("Please choose Teacher that gave you this course !!!");
					
					 return false;
				 }
				  else if($problem == ''){
					 alert("Please Report Problem !!!");
					
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
				
				
                
                   
                    
                    
					<!-- for Grades --------------------------------------------------------------------------------------------------------------------------------->
					
                    <div class="panel" id="services">
					<div id="gallery_container">
			
                    	<div class="col_380 float_l">
                        	<h1>GPA Overview</h1>
								
							<a href="home.php"><img src="images/ho.png"  alt="Home" style="width:70px;"> </a> 
							<center>
							<form method="post" >
							<table align="center" style="margin-left: 96px;">
								
								
									
									
										  <tr>
		<td>Course:</td>
									<td>
									<select  name="course" id="co" style="width:165px; font-size:15px; border-radius:7px;border:2px solid #dadada;">
															  <option>---Select Course---</option>
														<?php
													include ("db.php");
													$id =$_SESSION['Suserid'];
															
													$sql = mysql_query("SELECT * FROM studsem WHERE studentID ='$id'");
													while($test = mysql_fetch_array($sql))
													{
													if (!$test)
														{
														die("Error: Data not Found. . ");
														}
														$courseid=$test['courseID'];
														$getcourse=mysql_query("SELECT * FROM course WHERE courseID='$courseid'") or die(mysql_error());
														$getthis=mysql_fetch_array($getcourse);
													echo "<option value=".$getthis['courseID'].">".$getthis['coursetitle']."</option>";
													}
														mysql_close($conn);
													 ?>
									</select>
					 
		</td> </tr> <tr>
									</option>
									</select>
									<td>Teacher:</td>
		<td>
					<select  name="teacher" id="teach" style="font-size:15px; border-radius:7px;border:2px solid #dadada;">
						  <option>---Select Teachers---</option>
					<?php
		  		include ("db.php");
				$id =$_SESSION['Tuserid'];
						
				$sql = mysql_query("SELECT * FROM teacher");
				while($test = mysql_fetch_array($sql))
				{
				if (!$test)
					{
					die("Error: Data not Found. . ");
					}
				
					
				echo "<option value=".$test['teacherid'].">".$test['firstname']." ".$test['middlename']."</option>";
				}
					mysql_close($conn);
				 ?>
					 
		</td> </tr> <tr>
									</option>
									</select>
									<td>Problem</td>
								
									<td><textarea name="problem" id="prob" class="ed" rows="3" cols="30" maxlength="30" style="font-size:15px; border-radius:16px;border:2px solid #dadada;" required></textarea> </td> <br/> </tr><tr>
									<td></td>
									<br><td><input type="submit" name ="submit" value="submit" onclick="return noMore()" style="font-size:20px; border-radius:7px; border:2px solid #dadada;background-color:DarkGreen; color:DarkKhaki"></td>
								


        </tbody>			
							
   
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
 <?php include('db.php');
				
				if(isset($_POST['submit']))
				{
				
				$course = $_POST['course'];
				$teacher = $_POST['teacher'];
				$prob = $_POST['problem'];
				$id1 =$_SESSION['Suserid'];
			$result=mysql_query("SELECT * FROM teacher where teacherid='$teacher'");
			
while($row=mysql_fetch_array($result)){
	$teach=$row['teacherid'];
}
				
				$query = "INSERT INTO report(teacherid,studentID,courseID,problem,status)  VALUES ('$teach','$id1','$course','$prob','0')";
		mysql_query($query) or die ("Error in query: $query");
				
				echo"<h3>Report Succefully Sent</h3>";
				}
?>



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
            
          
            </ul>
        </div>
        
        <div id="footer">
        
       	Copyright © 2008 <a href="#">University of Gondar Registar </a> ||<a href="#">Online grading system</a> 
		</div>
    
    </div> <!-- end of slider -->

</body>
</html>