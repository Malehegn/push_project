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
<title>View  Notifications</title>

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
<div id="templatemo_content_right" style="margin-right: 165px;">
		<h1> View Notification </h1>
		
		<center>	  
	<form method="post">
	<input type="text" 
			name="notid" 
			placeholder="Notification ID" 
			onclick="if(this.value=='Course Code'){this.value=''}" 
			onblur="if(this.value==''){this.value='Course Code'}" 
			style="font-style:italic" />
	<input type="submit" name="search" value="search" class="btn" />
	</form>
	<?php include('db.php');
				
				if(isset($_POST['search']))
				{
				//$_SESSION['schyr'] = $_POST['schyr'];
				
				$notid = $_POST['notid'];
				
				$resultses = mysql_query("SELECT * FROM notification WHERE id = '$notid' LIMIT 0,1 ");
		
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
				 $id = $rowses['id'];
				 
				 echo "<br>";
				 echo "<table border='1'>";
				 echo "<tr bgcolor='#eeeeee'>";
				 echo "<th style='width: 195px;'><font color='green'>ID</font></th>";
				 echo "<th style='width: 500px;'><font color='green'>Position</font></th>";
				 //echo "<th style='width: 195px;'><font color='green'>Prerequisite</font></th>";
				 echo "<th style='width: 500px;'><font color='green'>Notification</font></th>";
				 //echo "<th style='width: 195px;'><font color='green'>Unit</font></th>";
				 //echo "<th style='width: 195px;'><font color='green'>DateAdded</font></th>";
				 echo "</tr>";
				 echo "<tr bgcolor='#f7f6c9'>";
				 echo "<td><strong><center><font color='green'>".$rowses['id']."</center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['position']."</center></strong></td>";
				 //echo "<td><strong><center><font color='green'>".$rowses['prerequesit']."</center></strong></td>";
				 echo "<td><strong><center><font color='green'>".$rowses['message']."</center></strong></td>";
				 //echo "<td><strong><center><font color='green'>".$rowses['unit']."</center></strong></td>";
				 //echo "<td><strong><center><font color='green'>".$rowses['dateadded']."</center></strong></td>";
		
				 echo "</tr>";
				 echo "</table>";
				 echo "<br>"; 
				 }
				 }
				
				
			?>
	<br /></center><br />

		 <table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="700" bgcolor="#FFFFFF">
        <thead >
                <tr>
                        
                        <th sort="average"><span class="style7">ID</span></th>
                        <!--<th sort="total"><span class="style7">Pre-Requesit</span></th> -->
						<th sort="total"><span class="style7">Position</span></th>
						<th sort="beds"><span class="style7">Notification</span></th>
						<!--<th sort="beds"><span class="style7">Unit</span></th> 
						<th sort="total"><span class="style7">Date Added</span></th> -->
                </tr>
        </thead>
        <tbody>
		
		
		
	
			<?php
			include("db.php");
			
			
				
			$result=mysql_query("SELECT * FROM notification ORDER BY id DESC");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['id'];	
				echo "<tr align='center'>";	
			
				echo"<td><font color='black'>". $test['id']. "</font></td>";
				//echo"<td><font color='black'>". $test['prerequesit']. "</font></td>";
				echo"<td><font color='black'>". $test['position']. "</font></td>";
				echo"<td><font color='black'>". $test['message']. "</font></td>";
				//echo"<td><font color='black'>". $test['unit']. "</font></td>";				
				//echo"<td><font color='black'>". $test['dateadded']. "</font></td>";							
				echo "</tr>";
			}
			mysql_close($conn);
			?>
 </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=6 ><font color="#000000">
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
          <td><form id="form1" name="form1" method="post" action="edit_notification.php" >
            <label>
            <input type="submit" name="edit" value="Edit"class="btn" />
            </label>
			</form>
			</td>
			<td>
			<form method="post" action="delete_notification.php">
            <label>
            <input type="submit" name="del" value="Delete" class="btn" />
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