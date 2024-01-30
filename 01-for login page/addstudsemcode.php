<?php
				
								if (isset($_POST['addstudsem']))
											{
											include("db.php");
											
										$result=mysql_query("SELECT * FROM studsemtemp");			
										while($test = mysql_fetch_array($result))
										{
												
										$id=$test['studentID'];
										$schyr=$test['schyr'];
										$sem=$test['sem'];
										$yr=$test['year'];
										$section=$test['section'];
										$progID=$test['program'];
										$major=$test['majorID'];
															
																			
									 mysql_query("INSERT INTO `studsem`(studentID,schyr,sem,year,section,program,majorID)
									 VALUES ('$id','$schyr','$sem','$yr','$section','$progID','$major')");  
											}
											mysql_query('TRUNCATE TABLE studsemtemp;')
											or die(mysql_error());
											
											header("Location: add_stud_info_sem.php");
										}
										
?>