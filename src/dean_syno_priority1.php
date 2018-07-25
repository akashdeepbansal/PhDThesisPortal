<?php include("connection.php");
session_start();

if($_SESSION["rank"] != 'dean')
{
	header('Location: index.php');
}

	$user_id = $_GET['eid'];
	$priority = '1';
	$query = 'UPDATE `examiners` SET `Priority` = "'.$priority.'" WHERE `User_id` = "'.$user_id.'"';
	
	header('Location: dean_syno_approved.php');


?>
