<?php
$con=@mysql_connect ('localhost','root','');

$dep = $_POST['department'];


$sql="INSERT INTO department (depName)
VALUES ('$dep')";
$select=mysql_select_db("onlinegradeinquiry",$con);
if (!mysql_query($sql)) {
die('Error: ' . mysql_error($con));
}
echo "ONE RECORD ADDED";
mysql_close($con);
?>