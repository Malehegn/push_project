<?php session_start();?>
<?php
	if (!isset($_SESSION['userid']) or ($_SESSION['logged'] != 'true')){
	 header('location:index.php');}

 ?>
<!DOCTYPE html >
<html >
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
<link rel="shortcut icon" href="images/chmsc.png">
<link rel="icon" href="images/chmsc.png" type="image/png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Admin User</title>

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
<div id="templatemo_content_right" style="margin-right: 132px;">
<h1>View Admin's Information</h1>
       	  
		  <table id="demoTable" style="border: 1px solid #ccc;" cellspacing="0" width="700" bgcolor="#FFFFFF">
        <thead >
                <tr>
                       
                        <th sort="date"><span class="style7">UserName</span></th>
                        <th sort="description"><span class="style7">Password</span></th>
						<th sort="description"><span class="style7">Edit</span></th>
						<th sort="description"><span class="style7">Delete</span></th>
                        <th sort="description"><span class="style7">ADD</span></th>
                       
						
                </tr>
        </thead>
        <tbody>
		
                <?php
			include("db.php");
			
			
				
			$result=mysql_query("SELECT * FROM admin");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['adminID'];	
				echo "<tr align='center'>";	
				
				
				echo"<td><font color='black'>". $test['UserName']. "</font></td>";
				echo"<td><font color='black'>". $test['Password']. "</font></td>";
				echo"<td> <a href ='edit_admin.php?adminID=$id'><img src='images/2.png'></a>";	
				echo"<td> <a href ='del_admin.php?adminID=$id'><center><img src='images/9.png' onClick='return confirm('Are you sure you want to delete this program?')'></center></a>";
				echo"<td> <a href ='add_admin.php?adminID=$id'><img src='images/8.png'></a>";
												
				echo "</tr>";
			}
			mysql_close($conn);
			?>

        </tbody>
        <tfoot class="nav">
                <tr>
                        <td colspan=5><font color="#000000">
                                <div class="pagination"></div>
                                <div class="paginationTitle">Page</div>
                                <div class="selectPerPage"></div>
                                <div class="status"></div>
								</font>
                        </td>
                </tr>
        </tfoot>
</table>
	 <br />
	 	
       	      
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
