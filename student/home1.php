<?php 
	session_start();
?>
<?php
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png"  />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student's Form</title>
<meta name="keywords" content="Green, Board, theme, web design, free template, website templates, CSS, HTML" />
<meta name="description" content="Green Board Theme is a free website template provided by templatemo.com" />
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
                
                    <div class="panel" id="home">
					<div id="gallery_container">
                    	<div class="col_550 float_l">
						
                            <h1>Welcome to Registrar of Atse Tewedros campus in UOG </h1>    
                            
                            <p>Atse tewdros campus is a public, state-owned college, the main campus of which is in UOG. It provides higher technological, professional and vocational instruction and training in science, agriculture and industrial fields, as well as short-term or vocational courses.</p>
                            <div></div>
							
							<br />
							
							<h2 class="style5"><em>Mission</em></h2>                           
                            <p>A leading institution in higher and continuing education committed to engage in quality instruction, development-oriented research, sustainable lucrative economic enterprise, and responsive extension and training services through relevant academic programs to empower a human resource that responds effectively to challenges in life and acts as catalyst in the holistic development of a humane society</p> 
														
							<br />
							
							<h2 class="style1">Vision</h2>                            
                            <p>CHMSC EXCELS: Excellence, Competence, and Educational Leadership in Science and Technology.   Driven by its passion for continuous improvement, the State College has to vigorously pursue distinction and proficiency in delivering its statutory functions to the Filipino people in the fields of education, business, agro-fishery, industrial, science and technology, through committed and competent human resource, guided by the beacon of innovation and productivity towards the heights of elevated status.</p> 
							
							
							<br /><h2 class="style1"></h2> 
							
							<h2 class="style1">Objectives</h2> 
							<p>
1.Produce world class teacher education and technology graduates through innovative instruction, relevant training and significant co- curricular activities;<br /><br />
2.	Provide and implement curricular programs, projects and activities that promote local and national development;<br /><br />
3.	Equip students with analytical, innovative and manipulative skills/ relevant to tha practice of profession;<br /><br />
4.	Inculcate cultural/ aesthetic and moral values;<br /><br />
5.	Initiate and sustain researches along teacher education and technology.<br /><br />
6.	Established strong linkages with governmental and non- governmental organization in local/ national and international levels;<br /><br />
7.	Extends services through technical expertise and facilities to the community, and;<br /><br />
8.	Generate income and funds through production and services.</p>


							<br /><h2 class="style5" ><em>Historical Milestone</em></h2> 
							<p>
<strong>May 7, 1954</strong> – Approval of R. A. No. 848, creating the Negros Occidental School of Arts and Trades, authored and sponsored by Honorable Congressman Carlos A. Hilado.<br /><br />

<strong>July 1, 1954</strong> – Formal  inauguration of NOSAT and opening or enrollment with 89 students enrolled in the four year secondary trade- curriculum with the following shop courses: Automechanics, General Metalwork, Practical Electricity, Woodcarving, Building Construction Furniture and Cabinet Making.<br /><br />

            <strong>April 7-11, 1969</strong> – Seat of the 10th PAVE Annual Convention; Theme: “Vocational- Technical Education in the Manpower Development”; Guest Speaker: Hon. Onofre D. Corpus, Secretary of Education.<br /><br />

            <strong>September 4, 1975</strong> – Granting of authority to offer Bachelor of Science in Industrial Technology (BSIT).<br /><br />

            <strong>June 14, 1976</strong> – Granting the authority to offer Bachelor of Science in Industrial Education (BSIE).<br /><br />

           <strong> February 7, 1977</strong> – Approval of authority to offer Bachelor of Science in Practical Arts Education (BSPAEd).<br /><br />

            <strong>February 18, 1977</strong> – Granting the authority to offer Master of Arts in Teaching Vocational Education under the umbrella of ISAT.<br /><br />

            <strong>August 1, 1977</strong> – Approval of proper authorities of the change of the name from NOSAT to NOCAT.<br /><br />

            <strong>July 1979</strong> – NOCAT celebrated its Silver Anniversary as a trade technical institution.<br /><br />

           <strong> January 1, 1984</strong> – Batas Pambansa Bilang 477 Integrated 3 institutions of learning, the NOCAT Talisay, BCNTS in Alijis, Bacolod City and the NOPCC also in Bacolod City which made way for the incorporation of a tertiary state educational institution called Paglaum State College.<br /><br />

            <strong>May 5, 1994</strong> – The College was renamed into Carlos Hilado Memorial State College through R.A. 770 authored by Cong. Jose Carlos V. Lacson of the 3rd district of Negros Occidental.<br /><br />

            <strong>September 23, 1998</strong> – Granting of Candidate Status to the Teacher Education and Industrial Technology Programs of CHMSC Talisay City by the Board of Trustees of the Accrediting Agency of Chartered Colleges and Universities in the Philippines, Inc. (AACUP, Inc)<br /><br />
			
            <strong>December13, 2000</strong> – Granting of Accredited Status to the Teacher Education and Industrial Technology Programs of Carlos Hilado Memorial State College, Talisay City by the  Board of Trustees of the Accrediting Agency of Chartered Colleges and Universities in the Philippines, Inc. (AACUP, Inc)<br /><br />

            <strong>November 24, 2000</strong> – The Negros Occidental School of Fisheries (NOSOF) at Binalbagan was integrated into the CHMSC as per BOT Resolution No. 46 series of 2000.<br /><br />

            <strong>August to December 2003</strong> – CHMSC celebrated its 20th year as a State College.<br /><br />

            <strong>July to December 2004</strong> – CHMSC celebrated its Golden Anniversary as a trade technical institution.<br /><br />

            <strong>December 29, 2005</strong> – Level II (Reaccredited Status) awarded by AACUP, Inc. for a 5- year period from Dec. 1, 2005 to Nov. 30, 2010 to the Secondary Teacher Education Program, Elementary Teacher Education Program and Industrial Technology Program.
<br /><br />
           <strong> December 2006</strong> – 2nd Top Performer in the Licensure Examination for Teachers (LET) 2006 in the whole Philippine (Category B).<br /><br />

            <strong>August 3, 2006 </strong>– Awarded as Finest best Sector Project Awards for the “Design and Production of Selected Farm Implements for Small Scale Farmers in Sugar Cane Haciendas in the City of Talisay by the Regional development Council.<br /><br />

            <strong>March 7, 2008</strong> – DepEd awarded CHMSC as one of the 82 Teacher Training Institutions in the Philippines.<br /><br />
							</p>
							
							<br /><h2 class="style11">Student’s Code of Conduct and Discipline</h2> 
							<p></p>

							
							<h2 class="style1">Purpose of Code </h2> 
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							 The primary concern of Carlos Hilado Memorial State College is the students. The college attempts to provide for all students a campus environment that is conducive to academic endeavor and social and individual growth.<br /><br />
            To that end, rules, regulations, and guidelines governing a students’ behavior and the students’ relationship with the college have been formulated into a Student’s Code of Conduct and Discipline. Enrollment at Carlos Hilado Memorial State College is considered implicit acceptance of these and other policies applicable to students, all of which are educational in nature and designed to help students understand expectation and accept responsibility for their own actions.<br /><br />
            This code and other college policies are subject to change. Changes are available at the Office of Student Services Division and through the college publication. The student is responsible for obtaining all published materials and updates from the Director of the Students Services Division relating to the code and to become familiar with other rules and guidelines which have bearing on student behavior and responsibilities.							</p>
							
							<br />
							<h2 class="style1">Authority for Discipline </h2> 
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            As both the responsibility and the authority for discipline at Carlos Hilado Memorial State College ultimately rest with the Board of Trustees, the President, acting on their behalf, has delegated authority to administer a fair and adjust disciplinary program to the Director of Student Services Division. Therefore, the Judicial Officer, his/ her staff or designee, and certain committees to whom this responsibility has been delegated, have the authority to enforce all regulations approved and stated in this College documents or otherwise, and to administer disciplinary procedures.<br /><br />
            This Code is applicable to currently, continuing, and formerly enrolled students as well as individuals seeking admission to the College, Conduct prior to admission to the college that may have an adverse effect on the student/ college relationship may be considered by the college.							</p>
							
							<br />
							<h2 class="style5"><em>Student Responsibility </em></h2> 
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            Students retain the responsibilities of citizenship. The college expects that each student should conduct himself/ herself in a manner compatible with the college’s function as an educational institution. Regardless of place and residence, each student must observe all applicable local laws both on and off the campus. Any student who violates any provision of those laws is subjected to disciplinary action, including expulsion, notwithstanding action taken by civil authorities on account of violation.							</p>
							
							<br />
							<h2 class="style1">Nature of Code </h2> 
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            The Student Code of Conduct and Discipline is not a contract and serves only as a guideline for the fulfillment of acceptable and fair procedures. The standard of review in all hearings is by predominance or greater weight of the credible evidence.
           <br /><br /> The Board of Trustees has the authority and may modify or change the Student Code of Conduct and Discipline at any time. In addition, the procedures contained hereun maybe modified by the college at any time in order to effectuate justice.							</p>
							
							<br />
							<h2 class="style1">Records</h2> 
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							Upon receipt of information regarding an alleged violation of the code, a disciplinary file will be generated in the Director of Student Services. At the conclusion of the disciplinary process, the file, including original complaint or evidence, summons, statements, hearing notations, conclusions and sanctions, if any, will become a part of the disciplinary records in the office.<br /><br />
            Disciplinary records are kept for seven years from date of incident. At that time, the material will be destroyed, except for files dealing with misconduct penalties such as disciplinary probation, suspension or expulsion, which become a part of student’s permanent behavioral record in the Director of Students Services Office and will be retained indefinitely. Disciplinary records may be introduced and given due consideration in any subsequent case in which the student may be involved.							</p>
							
							<br />
							<h2 class="style1">1.0  Norms of Conduct </h2> 
							<p>
							1.1  Dress Code <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								For Men <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								For Women<br />
							1.2  Wearing of Prescribed Uniform<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.2.1        The prescribed school uniform for Men<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.2.2        The prescribed school uniform for Women<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.2.3        Policy on uniform exemption<br />
							1.3  I.D. Requirements (No ID, No Entry)<br />
							1.4  Hair Cut for Male Students<br />
							1.5   Restricted Areas on Campus<br />
							1.6  Smoke-Free/ Liquor- Free/ Drug-Free Campus<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.6.1        CHMSC Students<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.6.2        Enforcement Officers<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.6.3        Fines/ Penalties<br />
							1.7  Student Attendance<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.7.1        Limits<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.7.2        Prescribed Limit of Absence<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.7.3        Tardiness<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.7.4        Notice of Illness<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.7.5        Excused Absences<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.7.6        Examinations Mid- Term<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.7.7        Cheating<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							1.7.8        Promissory Notes<br />
							1.8  Anti- Littering and Vandalism- Free<br />
							1.9  Use of Cell phones<br />
							1.10          Outside the Campus<br />
							</p>
							
							<br />
							<h2 class="style1">2.0 Conduct and Discipline </h2> 
							<p>
							2.1  Disciplinary Standard<br />
							2.2  Categorization of Behavior Based on Locus of Responsibility<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							A.    College Offenses<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							B.     Academic Offenses<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							C.     Personal Offenses<br />
							2.3  The Structural Organization<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							2.3.1        The Teacher<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							2.3.2        The Department Head/ Area Chairman/ Program Coordinator<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							2.3.3        The College Dean/ Branch Director<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							2.3.4        The Director, Student Services Division<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										2.3.4.1 There must be a Student Welfare Committee<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							2.3.5 The Discipline Officer<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							2.3.6 Student Grievance and Disciplinary Tribunal<br />
							
							2.4 Imposition and Administration of Disciplinary Action Procedure<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										2.4.1 Filing<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										2.4.2 Reply<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										2.4.3 Course of Action<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										2.4.4 Disciplinary Hearing<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										2.4.5 Appeal<br />
							</p>
						</div>
                        
                        <div class="col_300 float_r">
						
                          
                            
                            <h2>Photo's of UOG Registrar</h2>
							<div class="image_wrapper"><img src="images/c1.jpg" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/1.jpg" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/chmsc.jpg" alt="Image 2"  height="200" width="280"/></div>
                            <div class="image_wrapper"><img src="images/DSC06883.JPG" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/DSC06880.JPG" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/DSC06882.JPG" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/DSC06893.JPG" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/DSC06892.JPG" alt="Image 2"  height="200" width="280"/></div>
							
							<div class="image_wrapper"><img src="images/DSCN2155.JPG" alt="Image 2"  height="200" width="280"/></div>							
							<div class="image_wrapper"><img src="images/20060101223826.jpg" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/c5.jpg" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/c6.jpg" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/IMG_2399.JPG" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/IMG_2400.JPG" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/IMG_2403.JPG" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/IMG_2409.JPG" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/IMG_2410.JPG" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/c9.jpg" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/c10.jpg" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/DSC05406.JPG" alt="Image 2"  height="200" width="280"/></div>
							<div class="image_wrapper"><img src="images/DSC05532.JPG" alt="Image 2"  height="200" width="280"/></div>
							
							
							
							
                            <div class="btn_more"><a href="#contactus">To View The Developer Click Here.</a></div>
                        </div>
					  </div>
                    </div> <!-- end of home -->
					
					<!-- for Profile ------------------------------------------------------------------------------------------------------------------------------------->
                    <?php
						require("db.php");
						$id =$_SESSION['userid'];
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
		
	$results=mysql_query("SELECT  program.programtitle FROM student LEFT JOIN program ON student.programId=program.programId WHERE studentID='$id'");
		
		while($row = mysql_fetch_array($results))
		{
		echo "<p >PROGRAM:  <em>".$row['programtitle']."</em></p>"; 
		
		}
		?>
						
						
						<p>BIRTHDATE:  <em> <?php echo $test['dateofbirth']?> </em></p>
						<p>BIRTH PLACE:  <em> <?php echo $test['placeofbirth']?></em></p>
						<br /><br />
						<p>TERTIARY:  <em> <?php echo $test['terschool'].",".$test['teradd'].",".$test['terschyr']?> </em></p>
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
													$id =$_SESSION['userid'];
															
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
									
										onclick="if(this.value=='School Year'){this.value=''}" 
										onblur="if(this.value==''){this.value='School Year'}" 
										style="font-style:italic" />
									</td><td>And</td>
									<td><select name="sem">	
										<option>---Select Semester---</option>						
										<option >1st Semester</option>
										<option>2nd Semester</option>
										<option>Summer Semester</option>
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
				 echo "<th style='width: 195px;'><font color='green'>Program</font></th>";
				 echo "<th style='width: 500px;'><font color='green'>Major</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Course</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Grades</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Remarks</font></th>";
			
				 echo "</tr>";
				 echo "<tr bgcolor='#f7f6c9'>";
				 echo "<td><strong><center><font color='green'>".$rowses['schyr']."</font></center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['sem']."</font></center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['year']."-".$rowses['section']."</font></center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['program']."</font></center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['major']."</font></center></strong></td>";				
				 
				 $resulta=mysql_query("SELECT  course.coursetitle FROM studsem LEFT JOIN course ON studsem.courseID=course.courseID WHERE studSemID='$id'");
				while($testsa = mysql_fetch_array($resulta))
				{
				echo"<td><strong><center><font color='green'>". $testsa['coursetitle']. "</font></strong></td>";
				}
				
				 echo "<td><strong><center><font color='green'>".$rowses['grades']."</center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['remarks']."</center></strong></td>";
				 
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
			$id =$_SESSION['userid'];
			$result=mysql_query("SELECT * FROM studsem WHERE studentID ='$id'");
			$sum=0;
			$sum2=0;
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
		
				//echo"<td><font color='black'>". $test['remarks']. "</font></td>";
												
				echo "</tr>";
			 }
			 echo "<h4>The Total grade point is= $sum <br>The Total ECTS = $sum2</h4>";
			 echo "<h3><b>The CGPA result is = $cgpa <b></h3>";
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
							<legend>Change Password:</legend>
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
			echo "Please enter a valid username and password!";
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
        
       	Copyright © 2008 <a href="#">University of Gondar Registar </a> ||<a href="#">Online Grade grading system</a> 
		</div>
    
    </div> <!-- end of slider -->

</body>
</html>