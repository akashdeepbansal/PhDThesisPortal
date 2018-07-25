<?php include("connection.php");
session_start();

$user_id = $_SESSION["user_id"];
if($_SESSION["rank"] == 'dean')
{
	//$dep = $_SESSION["drc_dep"];
	$tid = $_GET['id'];
	$query = 'UPDATE `thesis` SET `DEAN_APPROVAL_0` = "YES" WHERE `Thesis_id` = "'.$tid.'"';
	$result = mysqli_query($conn,$query);
	header('Location: dean_thesis_approved.php');

}





?>