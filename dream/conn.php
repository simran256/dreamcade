<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$ses_id = session_id();

$host = 'localhost';
$username = 'dreamcadcam_dreamcadcam';
$password = '6TSJ,%osDc(m';
$dbName = 'dreamcadcam_dreamcadcam';



$conn = new mysqli($host,$username,$password,$dbName);
if($conn->connect_errno)
{
	echo $conn->connect_error;
}
//$site_root = 'https://'.$_SERVER['HTTP_HOST'].'/';
$site_root = 'https://www.dreamcadcam.com/admin';
$site = 'https://www.dreamcadcam.com/';

?>