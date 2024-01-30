<?php session_start();?>
<?php
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html >
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<style type="text/css">
<!--
.style7 {font-size: 26px}
.style8 {font-family: tahoma}
.style9 {font-size: 12px; }
.style10 {
	color: #d1e050;
	font-style: italic;
}
.style11 {color: #d1e050}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home admin</title>

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
	  <div id="contentokana">
	 <div id="ndpah" align="center"><img src="images/3.jpg" width="900" height="114"/></div>
      <div class="style8" id="contento">
       <br> <p align="center" class="style7">Welcome to university of gondar <br> <br> Office of registrar</p>
        <p class="style7">&nbsp;</p>
        <p align="justify" class="style9 style10">Registrar office is the major part of the campus. computing and showing grades for students is one of the major tasks in the registrar office of the campus because the registrar office has to a responsibility for helping student such as solving grade and course related problems during their stay in the campus. To carry out their tasks they set a rules and regulation. 
The registrar office highly recommended that students should know these rule and regulation carefully and familiarize themselves with them. Registrar office of Atse Tewodros campus has registrar office that compute and submits the grade report of the students after printing it. Also the registrar assigns the courses for students which they take. </p>
        <br />
       
		
       <p><img src="images/chmsc1.png" width="142" height="117" style="margin-top: 18px;" />
	     
	       <!-- end of content right -->
        
        <table cellspacing="5" style="float: right; margin: -95px -16px 0px 0px;">
           <tbody>
             <tr>
               <th scope="row"><span class="style11">Motto</span></th>
               <td>&quot;Serving the country since, 1954 &quot;</td>
             </tr>
             <tr>
               <th scope="row"><span class="style11">Established</span></th>
               <td>1954</a></td>
             </tr>
             <tr>
               <th scope="row"><span class="style11">Type</span></th>
               <td>State college</td>
             </tr>
             
             <tr>
               <th scope="row"><span class="style11">Location</span></th>
               <td>Gondar university, atse tewdros campus </td>
             </tr>
             <tr>
               <th scope="row"><span class="style11">Campus</span></th>
               <td>Urban, 5 hectares</td>
             </tr>
             <tr>
            
             </tr>
             
           </tbody>
         </table>
        </div>
		
        <div id="content" align="right">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<br />
		&nbsp;&nbsp;&nbsp;&nbsp;
		
		<div id="text">
		</div>
		
    
    	<div class="cleaner_with_height" style="margin-top: 18px;">><p> <img src="images/text1.png" width="281" height="369" class="img" /><p></div>
  </div> 
  </div>
    </div>
	
    <div id="templatemo_footer" style="margin-top:12px;">
      <?php include('include/footer.php')?>
  </div> 

</div> 
</body>
</html>