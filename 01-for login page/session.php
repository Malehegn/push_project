<?php
error_reporting();
if (empty($_SESSION['is']['UserName'])) {
require('denied.php');
exit;
}
$login =  $_SESSION['is']['UserName'];
if (!$login) { 
require('denied.php');
exit;
}
?>