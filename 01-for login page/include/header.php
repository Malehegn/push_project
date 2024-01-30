<ul>
            <li style="width: 75px;"><a href="admin_home.php" >Home</a></li>
            <li>
				<a href="#" >Add</a>
					<ul>
						
						<li><a href="add_admin.php">Admin</a></li>
						<li><a href="add_stud_info.php">Student</a></li>
						<li><a href="add_teacher_info.php">Teacher</a></li>
						<!--<li><a href="add_program.php">Program</a></li> -->
					 
						<li><a href="add_course.php">Course</a></li>
							<li><a href="Add_dep.php">Department</a></li>
						<li> <a href="notify.php" >Notification</a> </li>				
					</ul>
			</li>                   
            <li>
				<a href="#" >Update</a>
					<ul>
						<li><a href="view_admin.php">Admin</a></li>
						<li><a href="view_stud_info.php">Student</a></li>
						<li><a href="view_teacher.php">Teacher</a></li>
						<!-- <li><a href="view_prog.php" >Program</a></li>
						<li><a href="view_major.php">Major</a></li> -->
						<li><a href="sample.php">Grades</a></li>	
						<li><a href="view_course.php">Course</a></li>	
						<li><a href="view_notification.php">Notification</a></li>				
					</ul>
			</li>  
             <li>
				<a href="#" >Problems</a>
					<ul >
						<li><a href="problem.php">Confirmed</a></li>
						
																
					</ul>
			</li> 
			
			
			<li style="width:223px; ">&nbsp;</li> 
            <li><a href="logout.php">Log-out</a></li>
			
    	</ul>
		<ul>
		<div style="color:#FFFFFF";>
		<?php $date= date("l, F d, Y");
			/*echo " <font color ='black'>";*/
			echo $date ;
			echo "  &nbsp; "
		?> 
		</div>
		</ul>