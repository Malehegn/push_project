<?php 
	session_start();
?>
<?php
	if (!isset($_SESSION['Suserid']) or ($_SESSION['logged'] != 'true'))
	{
	 header('location:../index.php');
	 }

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
                
                    <div class="panel" id="home">
					<div id="gallery_container">
                    	<div class="col_550 float_l">
						
                            <h1>Welcome To University Of Gondar<br> <br> Office Of Registrar</h1>    
                            
                            <p>Atse tewdros campus is a public, state-owned college, the main campus of which is in UOG. It provides higher technological, professional and vocational instruction and training in science, agriculture and industrial fields, as well as short-term or vocational courses.</p>
                            <div></div>
							
							<br />
							
							<h2 class="style5"><em>Mission</em></h2>                           
                            <p>A leading institution in higher and continuing education committed to engage in quality instruction, development-oriented research, sustainable lucrative economic enterprise, and responsive extension and training services through relevant academic programs to empower a human resource that responds effectively to challenges in life and acts as catalyst in the holistic development of a humane society</p> 
														
							<br />
							
							<h2 class="style1">Vision</h2>                            
                            <p>Excellence, Competence, and Educational Leadership in Science and Technology.   Driven by its passion for continuous improvement, the State College has to vigorously pursue distinction and proficiency in delivering its statutory functions to the Filipino people in the fields of education, business, agro-fishery, industrial, science and technology, through committed and competent human resource, guided by the beacon of innovation and productivity towards the heights of elevated status.</p> 
							
							
							<br /><h2 class="style1"></h2> 
							
							<h2 class="style1">Objectives</h2> 
							<p>
1.Produce world class teacher education and technology graduates through innovative instruction, relevant training and significant co- curricular activities;<br /><br />
2.	Provide and implement curricular programs, projects and activities that promote local and national development;<br /><br />
3.	Equip students with analytical, innovative and manipulative skills/ relevant to tha practice of profession;<br /><br />
4.	Inculcate cultural/ aesthetic and moral values;<br /><br />
5.	Initiate and sustain researches along teacher education and technology.<br /><br />
</p>



							
							
							
							
						</div>
                        
                        <div class="col_300 float_r">
						
                          
                            
                            <h2 style="color:darkred">Notifications</h2>
							<ul>
							<?php
	$con=@mysql_connect ('localhost','root','');
mysql_select_db("onlinegradeinquiry",$con);
	$result = mysql_query("SELECT * FROM notification WHERE position='student' ORDER BY id DESC");
			while($row = mysql_fetch_array($result))
				{
					echo '<li style=color:black><b>'.$row['message'].'</b></li>';
				}
	?>
	</ul>
							
							
                        </div>
					  </div>
                    </div> <!-- end of home -->
					
					<!-- for Profile ------------------------------------------------------------------------------------------------------------------------------------->
                    <?php
						require("db.php");
						$id =$_SESSION['Suserid'];
						$result = mysql_query("SELECT * FROM student WHERE studentID ='$id'");
						$test = mysql_fetch_array($result);
						?>
					
					
                    <div class="panel" id="aboutus">
                        <h1>Hello there <?php echo $test['firstname']?>!!!</h1>
						<div id="gallery_container">
                        <div class="image_wrapper image_fl">
						
						<?php
				echo "<img src='../01-for login page/images/photos/".$test['uploadphoto']."' width='260' height='260 alt='bread fuck'/>";?>	
						</div>
						
						
						
						
                        <p>NAME:<em> <?php echo $test['firstname']." ".$test['middlename']." ".$test['lastname']?></em></p>
                        <p>ID NUMBER: <em> <?php echo $test['UserName']?></em></p>
                        <p>GENDER:  <em> <?php echo $test['gender']?></em></p>
						
						<?php
		include ("db.php");
		
	$results=mysql_query("SELECT  department.depName FROM student LEFT JOIN department ON student.depID=department.depID WHERE studentID='$id'");
		
		while($row = mysql_fetch_array($results))
		{
		echo "<p >DEPARTMENT:  <em>".$row['depName']."</em></p>"; 
		
		}
		?>
						
						
						<p>BIRTHDATE:  <em> <?php echo $test['dateofbirth']?> </em></p>
						<p>BIRTH PLACE:  <em> <?php echo $test['placeofbirth']?></em></p>
						<br /><br />
						<!--<p>TERTIARY:  <em> <?php echo $test['terschool'].",".$test['teradd'].",".$test['terschyr']?> </em></p>-->
						<p>SECONDARY:  <em> <?php echo $test['secschool'].",".$test['secadd'].",".$test['secschyr']?></em></p>
						<p>PRIMARY:  <em> <?php echo $test['elemschool'].",".$test['elemadd'].",".$test['elemschyr']?> </em></p>
						
						
	
			
				
						
                        <div class="cleaner_h30"></div>
                        
						</div>
                    </div>
                    
					<!-- for Grades --------------------------------------------------------------------------------------------------------------------------------->
					
                    <div class="panel" id="services">
					<div id="gallery_container">
			
                    	<div class="col_380 float_l">
                        	<h1>Grades Overview</h1>
							<center>
							<form method="post" action="#services">
							<table align="center" style="margin-left: 96px;">
								<tr>
									<td>Subject</td>
									<td>
									<select  name="course" style="width: 148px;">
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
									</td><td>In</td>
									<td><input type="text" 
										name="schyr" 
										value="School Year" 
									maxlength="4" onKeyPress="return isNumberKey(event)"
										onclick="if(this.value=='School Year'){this.value=''}" 
										onblur="if(this.value==''){this.value='School Year'}" 
										style="font-style:italic" />
									</td><td>And</td> 
									<td><select name="sem">	
										<option>---Select Semester---</option>						
										<option >1st Semester</option>
										<option>2nd Semester</option>
								
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
				
				$resultses = mysql_query("SELECT * FROM studsem WHERE courseID = '$course' AND schyr = '$schyr' AND sem = '$sem' LIMIT 0,1 ");
		
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

							
			</center><br />				
							
    <p> <table id="demoTable" style="border: 1px solid #ccc; margin-left: 57px;" cellspacing="0" width="700" bgcolor="#FFFFFF" >
        <thead >
                <tr>
                         <th sort="index"><span class="style7">School YR</span></th>
						<th sort="index"><span class="style7">Semester</span></th>
                        <th sort="index"><span class="style7">YR & Sec</span></th>
					    <th sort="date"><span class="style7">Course</span></th>
                         <th sort="description"><span class="style7">ECTS</span></th> 
                       <th sort="description"><span class="style7">Mark</span></th> 
					
						 <th sort="description"><span class="style7">Grades</span></th>
						 <th sort="description"><span class="style7">Grade Point</span></th> 
                       
                       
						
                </tr>
        </thead>
        <tbody>
		
                <?php
			include("db.php");
			$id =$_SESSION['Suserid'];
			$result=mysql_query("SELECT * FROM studsem WHERE studentID ='$id' ORDER BY schyr ASC , sem");
			
			while($test = mysql_fetch_array($result))
			{
			 
				$id = $test['studSemID'];
                $value=$test['gradepnt'];
	
		         $sum += $value;
                 $value2=$test['ects'];
	
		         $sum2 += $value2;
				 
				 $cgpa=$sum/$sum2;
				echo "<tr align='center'>";	
				
				echo"<td><font color='black'>". $test['schyr']. "</font></td>";
				echo"<td><font color='black'>". $test['sem']. "</font></td>";
				echo"<td><font color='black'>". $test['year'].'-'. $test['section']. "</font></td>";
				?>
				<?php
		include ("db.php");
		
	$results=mysql_query("SELECT  course.coursetitle FROM studsem LEFT JOIN course ON studsem.courseID=course.courseID WHERE studSemID='$id'");
		
		while($row = mysql_fetch_array($results))
		{
		echo"<td><font color='black'>". $row['coursetitle']. "</font></td>";
		
		}
		?>
				
			<?php	
				echo"<td><font color='black'>". $test['ects']. "</font></td>";
			
			
				echo"<td><font color='black'>". $test['mark']. "</font></td>";
				echo"<td><font color='black'>". $test['grades']. "</font></td>";
				echo"<td><font color='black'>". $test['gradepnt']. "</font></td>";
												
				echo "</tr>";
			}
			$round=round($cgpa,2);
			echo "<h3>The Total grade point is= $sum <br>The Total ECTS = $sum2 <br><B>CGPA= $round</B></h4>";
			echo  "<h4><a href='muke.php'>"."Click here for GPA result</a></h3>";
			   echo"<a href='report.php'>Report</a>";
			
			mysql_close($conn);
			?>

        </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=8><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle">Page</div>
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


<!--<script src="jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$().ready(function() {
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
		
			cpassword: {
				required: true,
				minlength: 5
			},
			
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			
			agree: "required"
		},
		messages: {
		
			cpassword: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
				
			},
			
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			
			agree: "Please accept our policy"
		}
	});
});
</script> -->

				
                    <div class="panel" id="gallery">
                        <h1>Change Current Password</h1>
						<center>
                        
                        <div id="gallery_container" align="left">
						
								<form class="cmxform" id="signupForm" method="post" action="#gallery">
						<fieldset style="width: 553px; margin-left: 131px;">
							<legend style="font-family:Monotype Corsiva;font-size:25px;color:darkblue"><b>Change Password:</b></legend>
							<p>
							  <label for="name" >ID Number:</label>
							  <input type="text" class="text w_22" name="user" id="name" value="" style="margin-left: 39px;" />
							</p>
							<p>
								<label for="cpassword">Current Password:</label>
								<input id="cpassword" name="cpassword" type="cpassword" style="margin-left: 0px;"/>
							</p>
							<p>
								<label for="password">Password:</label>
								<input id="password" name="password" type="password" style="margin-left: 46px;"/>
							</p>
							<p>
								<label for="confirm_password">Confirm password:</label>
								<input id="confirm_password" name="confirm_password" type="password" />
							</p>
										
							<input class="submit" type="submit" value="Submit" name="yut" />
							</p>
				
<?php  

include ("db.php");  

if(isset($_POST['yut'])){
$username = $_POST['user']; 
$password = $_POST['cpassword']; 
$newpassword = $_POST['password']; 
$confirmnewpassword = $_POST['confirm_password']; 

$result = mysql_query("SELECT Password FROM student WHERE UserName='$username'"); 
if($username=="" && $password=="" && $newpassword=="" && $confirmnewpassword==""){
			echo "<h3 style=color:darkred>"."<b>Please enter a valid username and password!</b>"."</h3>";
		}else{
if(!$result)  
{  
echo "The username you entered does not exist";  
}  
else  
if($password!= mysql_result($result, 0))  
{  
echo "You entered an incorrect password";  
}  
if($newpassword=$confirmnewpassword)  
    $sql=mysql_query("UPDATE student SET Password='$newpassword' where UserName='$username'");  
    if($sql)  
    {  
    echo "Congratulations You have successfully changed your password";  
    } 
else 
{  
echo "The new password and confirm new password fields must be the same";  
}
}}
?>
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
                <li><a href="#home" class="selected">Home<span class="ui_icon home"></span></a></li>
                <li><a href="#aboutus">Profile<span class="ui_icon aboutus"></span></a></li>
                <li><a href="#services">Grades<span class="ui_icon services"></span></a></li>
                <li><a href="#gallery">Change Password <span class="ui_icon gallery"></span></a></li>
                <li><a href="#contactus">The Team <span  class="ui_icon contactus"></span></a></li>
				      
            </ul>
        </div>
        
        <div id="footer">
        
       	Copyright © 2008 <a href="#">University of Gondar Registar </a> ||<a href="#">Online grading system</a> 
		</div>
    
    </div> <!-- end of slider -->

</body>
</html>