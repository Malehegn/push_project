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
					
					$program=$_POST['program'] ;
					
										
					$birthc=$_POST['birthc'] ;
					$frm137=$_POST['frm137'] ;
					$origtr=$_POST['origtr'] ;
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
					
					$name = $_FILES["image"] ["name"];
					$type = $_FILES["image"] ["type"];
					$size = $_FILES["image"] ["size"];
					$temp = $_FILES["image"] ["tmp_name"];
					$error = $_FILES["image"] ["error"];
					
												
		 mysql_query("INSERT INTO `student`(
		 									UserName,
											Password,
		 									contactnumber,
											uploadphoto,
											lastname,
											firstname,
											middlename,
											address,
											parentguardian,
											gender,
											dateofbirth,
											placeofbirth,
											scholarship,	
																																
											program,
										
																																	
											birthcertificate,
											form137,
											originaltranscript,
											elemschool,
											elemadd,
											elemschyr,
											secschool,
											secadd,
											secschyr,
											terschool,
											teradd,
											terschyr,
											dateadded,
											position
											) 
		 							VALUES (
											'$UserName',
											'$password',
											'$contact',
											'$name',
											'$lname',
											'$frstname',
											'$mname',
											'$address',
											'$pguardian',
											'$gender',
											'$dob',
											'$pob',
											'$scholrshp',
											
											'$program',
											
											
											'$birthc',
											'$frm137',
											'$origtr',
											'$eschool',
											'$eaddress',
											'$esy',
											'$sschool',
											'$saddress',
											'$ssy',
											'$tschool',
											'$taddress',
											'$tsy',
											'$dateadd',
											'$position'
											
											)"); 
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
		} 
	}
											
				
				
				header("Location: add_stud_info_course.php");		
				
				
	       
?>