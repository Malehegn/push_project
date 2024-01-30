<?php
$con=mysql_connect("localhost","root"."");


$position = $_POST['position'];
$message = $_POST['message'];

$sql="INSERT INTO  notification (position, message)
VALUES ('$position','$message')";
mysql_select_db("onlinegradeinquiry",$con);
if (!mysql_query($sql)) {
die('Error: ' . mysql_error($con));
}
header("location: view_notification.php");
mysql_close($con);

?>