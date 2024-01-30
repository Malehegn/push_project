<?php
include("db.php");

$id = $_REQUEST['studentID'];
mysql_query("UPDATE student SET status=0 WHERE studentID='$id'")
or die(mysql_error());
//echo "one record successfuly Updated";
header("Location: activate.php");
?>

