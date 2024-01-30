<?php
include("db.php");
$id = $_GET['studentIDs'];
mysql_query("UPDATE student SET status=1 WHERE studentID='$id'")
or die(mysql_error());
header("Location: deactivate.php");
?>


