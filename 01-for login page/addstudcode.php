<?php session_start(); ?>
<?php
if (isset($_POST['addstudinfo']))
	{	   
	include 'db.php';
	
			 		$UserName=$_POST['idnum'] ;
					$password= $_POST['password'] ;				
					$contact=$_POST['contact'] ;
					//$upload=$_POST['upload'] ;
					$lname=$_POST['lname'] ;
					$frstname=$_POST['frstname'] ;
					$mname=$_POST['mname'] ;
					$address=$_POST['address'] ;
					$pguardian=$_POST['pguardian'] ;
					$gender=$_POST['gender'] ;
					$dob=$_POST['dob'] ;
					$pob=$_POST['pob'] ;
					$scholrshp=$_POST['scholrshp'] ;
					
					$progID=$_POST['program'] ;
					
										
					
					$eschool=$_POST['eschool'] ;
					$eaddress=$_POST['eaddress'] ;
					$esy=$_POST['esy'] ;
					$sschool=$_POST['sschool'] ;
					$saddress=$_POST['saddress'] ;
					$ssy=$_POST['ssy'] ;
					$tschool=$_POST['tschool'] ;
					$taddress=$_POST['taddress'] ;
					$tsy=$_POST['tsy'] ;
					$dateadd=$_POST['d'] ;
					$position=$_POST['position'] ;
						$depid=$_POST['department'] ;
					
					$name = $_FILES["image"] ["name"];
					$type = $_FILES["image"] ["type"];
					$size = $_FILES["image"] ["size"];
					$temp = $_FILES["image"] ["tmp_name"];
					$error = $_FILES["image"] ["error"];
					
												
		 mysql_query("INSERT INTO `student`(UserName,Password,contactnumber,uploadphoto,lastname,firstname,middlename,depID,address,parentguardian,gender,dateofbirth,placeofbirth,elemschool,elemadd,elemschyr,secschool,secadd,secschyr,dateadded,position,status) 
		 							VALUES ('$UserName','$password','$contact','$name','$lname','$frstname','$mname','$depid','$address','$pguardian','$gender','$dob','$pob','$eschool','$eaddress','$esy','$sschool','$saddress','$ssy','$dateadd','$position','1')"); 
									
											$stud = mysql_query("SELECT * FROM student WHERE UserName = '$UserName'");
											$studen = mysql_fetch_array($stud);
											$_SESSION['studentID']=$studen['studentID'];
											
											echo"One Record Successfully Added!";
											
			if ($error > 0){
			die("Error uploading file! Code $error.");}
		else
		{
			if($size > 100000000) //conditions for the file
			{
			die("Format is not allowed or file size is too big!");
			}
			else
			{
			move_uploaded_file($temp,"images/photos/".$name);
			}
			header("Location: add_stud_info_course.php");	
		} 
	}
											
				
				
				
				
				
	       
?>