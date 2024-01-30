<?php session_start();?>
<?php
	if($_SESSION['logged'] != 'true'){
	 header('location:index.php');}

 ?>
<!DOCTYPE html >
<html >
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<script language="JavaScript" type="text/javascript" src="jquery.js"></script>
        <script language="JavaScript" type="text/javascript" src="jTPS.js"></script>
		<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
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

<style type="text/css">
<!--
.style7 {color: #006600}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Major</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
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
<div id="templatemo_content_right" style="margin-right: 132px;">
       	  
		  <h1> Edit Major </h1>
		  
	<center>	  
	<form method="post">
	<input type="text" 
			name="mjr" 
			value="Major" 
		
			onclick="if(this.value=='Major'){this.value=''}" 
			onblur="if(this.value==''){this.value='Major'}" 
			style="font-style:italic" />
	<input type="submit" name="search" value="search" class="btn" />
	</form>
	<?php include('db.php');
				
				if(isset($_POST['search']))
				{
				//$_SESSION['schyr'] = $_POST['schyr'];
				
				$mjr = $_POST['mjr'];
				
				$resultses = mysql_query("SELECT * FROM major WHERE major = '$mjr' LIMIT 0,1 ");
		
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
				 $id = $rowses['majorID'];
				 
				 echo "<br>";
				 echo "<table border='1'>";
				 echo "<tr bgcolor='#eeeeee'>";
				 echo "<th style='width: 195px;'><font color='green'>Program</font></th>";
				 echo "<th style='width: 500px;'><font color='green'>Major</font></th>";
				 echo "<th style='width: 195px;'><font color='green'>Dateadded</font></th>";
				 echo "<th style='width: 5px;'><font color='green'>Delete</font></th>";
			
				 echo "</tr>";
				 echo "<tr bgcolor='#f7f6c9'>";
				 
				 	$result=mysql_query("SELECT program.programtitle FROM major LEFT JOIN program ON major.programId=program.programId LIMIT 0,1");
				 	while($test = mysql_fetch_array($result))
					{	
				 echo "<td><strong><center><font color='green'>".$test['programtitle']."</center></strong></td>";
				 	}
				 echo "<td><strong><center><font color='green'>".$rowses['major']."</center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['dateadded']."</center></strong></td>";
				 echo"<td> <a href ='edit_major(code).php?majorID=$id'><img src='images/2.png'></a>";
		
				 echo "</tr>";
				 echo "</table>";
				 echo "<br>"; 
				 }
				 }
				
				
			?>
	</center><br />
	
		  <table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="700" bgcolor="#FFFFFF">
        <thead >
                <tr>
                        
                        <th sort="date"><span class="style7">Program</span></th>
                        <th sort="description"><span class="style7">Major</span></th>
                        <th sort="beds"><span class="style7">Date Added</span></th>
						 <th sort="date"><span class="style7">Delete</span></th>
				</tr>
        </thead>
        <tbody>
	
			<?php
			include("db.php");
			
			
				
		$result=mysql_query("SELECT major.majorID, major.major, major.dateadded, program.programtitle FROM major LEFT JOIN program ON major.programId=program.programId");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['majorID'];	
				echo "<tr align='center'>";	
				
				echo"<td><font color='black'>". $test['programtitle']. "</font></td>";
				echo"<td><font color='black'>". $test['major']. "</font></td>";
				echo"<td><font color='black'>". $test['dateadded']. "</font></td>";	
				echo"<td> <a href ='edit_major(code).php?majorID=$id'><img src='images/2.png'></a>";								
				echo "</tr>";
			}
			mysql_close($conn);
			?>
		 </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=5 ><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle">Page</div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
								</font>
                        </td>
                </tr>
        </tfoot>

</table>
</table>
	 <br />
	 	<table>
		<tr>
          <td><form id="form1" name="form1" method="post" action="delete_major.php" >
            <label>
            <input type="submit" name="del" value="Delete"class="btn" />
            </label>
			</form>
			</td>
			<td>
			<form method="post" action="view_major.php">
            <label>
            <input type="submit" name="view" value="view" class="btn" />
            </label>
          </form>
		  </td></tr>
		</table>
		      
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