<?php session_start();?>
<?php
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>


<!DOCTYPE html>
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD New Department</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" >
			 function noMore(){
			
		
				 $dep=document.getElementById("dep").value;
				
				
				 
			
				if($dep == ''){
					 alert("Please Enter Department name !!!");
					
					 return false;
				 }
				
				
			
				 return true;
			 }
			 </script>
<body>


<div id="templatemo_container">
	<div id="nav">
    	<?php include('include/header.php')?>
    </div><!-- end of menu -->
    
    <div id="templatemo_header">
   	  <div id="templatemo_special_offers" style="margin-left: 650px; margin-top: 85px; width: 254px;">
   	    <p align="center" class="style4">          Welcome </p>
       	  <p align="center" class="style4">Administrator    	        </p>
   	  </div>
  </div>
    <!-- end of header -->
    
    <div id="templatemo_content">
      <!-- end of content left -->
<div id="templatemo_content_right">
<form method="post">
	<table>
		<tr>
			<td>Department:</td>
			<td><input type="text" id="dep" name="department" placeholder="department" required /></td>
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="adddep" onclick = "return noMore()" value="ADD New Department" class="btn" /></td>
		</tr>
	</table>
</form>
   <?php
if (isset($_POST['adddep']))
	{	   
	include 'db.php';
	
			 		
					$dep= $_POST['department'] ;					
					
												
		 mysql_query("INSERT INTO `department`(depName) 
		 VALUES ('$dep')"); 
				echo "One record succefully added";
				//header("Location: Add_dep.php");				
	        }
?>    	      
</div> 
	
        <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
  </div> <!-- end of content -->
    
    <div id="templatemo_footer">
      <?php include('include/footer.php')?>
  </div> 
    <!-- end of footer -->

</div> <!-- end of container -->
</body>
</html>
