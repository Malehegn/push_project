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
<title>Notification</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

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
<form action="notifyexec.php" method="post" >
	<table>
		<tr>
			<td><h1 style="font-family:algerian font-size:20px Old Face;color:white">Position:</h1></td>
			<td>
			<select name="position" style="font-size:20px; border-radius:7px;border:2px solid #dadada;"> 
			<option value="student">Student</option>
			<option value="teacher">Teacher</option>
			
			</select>
			</td>
			<tr>
			<td><h1 style="font-family:algerian font-size:20px Old Face;color:white">Message:</h1></td>
			<td>
	
		<textarea name="message" class="ed" rows="7" cols="40" name="area" style="font-size:15px; border-radius:16px;border:2px solid #dadada;" required ></textarea> </td>
		
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="Post" id="button1" style="font-size:20px; border-radius:7px; border:2px solid #dadada;background-color:DarkGreen; color:DarkKhaki"></td>
		</tr>
		
	</table>
</form>
       	      
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
