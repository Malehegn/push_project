<?php session_start();?>
<?php
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html >
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
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Grade sheet</title>
</head>

<body>
	<?php include('db.php');
				
				if(isset($_POST['sheet']))
				{
				$_SESSION['schyr'] = $_POST['schyr'];
				$_SESSION['prog'] = $_POST['prog'];
				$_SESSION['course'] = $_POST['course'];
				$_SESSION['section'] = $_POST['sec'];
				$_SESSION['year'] = $_POST['year'];
				$_SESSION['semester'] = $_POST['semester'];
                                
				
				$schyr = $_POST['schyr'];
				$prog = $_POST['prog'];
				$course = $_POST['course'];
				$section = $_POST['sec'];
				$year = $_POST['year'];
				$semester = $_POST['semester'];
				
			?>
<div class="left" >
<form method="post">
<p><center>Republic of the Philippines</center></p>
<p><center> COLLEGE OF NATHURAL AND COMPUTATIONAL SCIENCE</center></p>
<p><center>Talisay City, Negros Occidental</center></p>
<p><center><b>Grade Sheet</b></center></p>
<br />

<?php
	$resultses = mysql_query("SELECT * FROM studsem WHERE schyr = '$schyr' AND program = '$prog' AND courseID = '$course' AND section = '$section' AND year = '$year' AND sem = '$semester' LIMIT 0,1 ");
		
			$i=0;
				while($rowses = mysql_fetch_array($resultses))
 				 {
				 $courseID = $rowses['studSemID'];
			
		echo "<br>";
		
		echo "<div><div align='left' style='width: 500px;'><strong>".$rowses['program'].'-'.$rowses['year'].'-'. $rowses['section'].'-'. $rowses['sem'].'-'. $rowses['schyr']."</strong>";
		echo "<br>"; 
		
				}
				$resulta=mysql_query("SELECT  course.coursetitle,course.coursedescription,course.hrsperweek,course.unit FROM studsem LEFT JOIN course ON studsem.courseID=course.courseID WHERE studSemID='$id'");
				while($testsa = mysql_fetch_array($resulta))
				{
				echo "<strong>".$testsa['coursetitle'].'-'. $testsa['coursedescription']."</strong></div>";echo "<br>";
				echo "<div align='right' >Hrs. Per Week: ";
				echo "<em><u>&nbsp;&nbsp;&nbsp;".$testsa['hrsperweek']."&nbsp;&nbsp;&nbsp;</u></em>";echo "<br>";
				echo "Unit :";
				echo "<em><u>&nbsp;&nbsp;&nbsp;". $testsa['unit']."&nbsp;&nbsp;&nbsp;</u></em></div></div>";
				}
  			
 ?>

<center><br />
	<table border="0" style="margin-left: 0px;" >
		
			<th style="width: 502px;" align="left">Name</th>			
			<th style="width: 640px;">Final</th>
			<th style="width: 680px;">Remarks</th>
			
			
		
		
			<?php	 
				
		$result = mysql_query("SELECT * FROM studsem WHERE schyr = '$schyr' AND program = '$prog' AND courseID = '$course' AND section = '$section' AND year = '$year' AND sem = '$semester' ");
  			
		
				$i=0;
				while($row = mysql_fetch_array($result))
 				 {
				 //$ID = $row['studSemID'];
				echo "<tr align='center'>";	
				
					//$results=mysql_query("SELECT  student.firstname,student.lastname FROM studsem LEFT JOIN student ON studsem.studentID=student.studentID WHERE studSemID='$id'");
				while($tests = mysql_fetch_array($results))
				{
				echo"<td align='left'><font color='black' >". $tests['firstname'].'&nbsp;'. $tests['lastname']. "</font></td>";
				}
				
				
				
				echo"<td><font color='black'>".$row['grades']. "</font></td>";	
				echo"<td><font color='black'>".$row['remarks']. "</font></td>";	
				++$i;
				}
				echo "</tr>";
				
				
				
			
				}
			
			?>
		
	</table>
</center>
<br /><br /><br /><br />
<div>
	Dean's Initial: __________________________________
</div>
<div align="right">
<br /><br /><br /><br />
	Teacher:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br /><br /><br />
	___________________________<br />
	Signature Over Printed Name
</div>
<br /><br /><br /><br /><br /><br />
<input type="button" onClick="show_confirm()" value="Print Grade Sheet"  /> 
</form>
</div>
</body>
</html>
