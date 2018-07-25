<?php include("connection.php");
session_start();

if($_SESSION["rank"] != 'dean')
{
	header('Location: index.php');
}

	$user_id = $_GET['eid'];
	$mailcontent = 'click on this link to activate the examiner link = activate_examiner.php?eid='.$user_id;
	echo $mailcontent;
	
	
	
	
	
	//$query = 'UPDATE `examiners` SET `Priority` = "'.$priority.'" WHERE `User_id` = "'.$user_id.'"';
	
	

?>
