<?php include("connection.php");
session_start();

$user_id = $_SESSION["user_id"];
if($_SESSION["rank"] == 'dean')
{
	//$dep = $_SESSION["drc_dep"];
	$sid = $_GET['id'];
	$query = 'UPDATE `synopsis` SET `DEAN_APPROVAL_0` = "REJECTED" WHERE `Synopsis_id` = "'.$sid.'"';
	$result = mysqli_query($conn,$query);
	header('Location: dean_syno_rejected.php');

}





?>