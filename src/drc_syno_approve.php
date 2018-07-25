<?php include("connection.php");
session_start();

$user_id = $_SESSION["user_id"];
if($_SESSION["rank"] == 'drc')
{
	$dep = $_SESSION["drc_dep"];
	$sid = $_GET['id'];
	$query = 'UPDATE `synopsis` SET `DRC_APPROVAL` = "YES" WHERE `Synopsis_id` = "'.$sid.'"';
	//echo $query;
	//die();
	$result = mysqli_query($conn,$query);
	
	header('Location: drc_syno_approved.php');
	//echo "lkjhgfdsa";
}





?>