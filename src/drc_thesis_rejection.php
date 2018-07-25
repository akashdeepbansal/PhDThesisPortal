<?php include("connection.php");
session_start();

$user_id = $_SESSION["user_id"];
if($_SESSION["rank"] == 'drc')
{
	$dep = $_SESSION["drc_dep"];
	$tid = $_GET['id'];
	$query = 'UPDATE `thesis` SET `DRC_APPROVAL` = "REJECTED" WHERE `Thesis_id` = "'.$tid.'"';
	//echo $query;
	//die();
	$result = mysqli_query($conn,$query);
	
	header('Location: drc_thesis_history.php');
	//echo "lkjhgfdsa";
}





?>