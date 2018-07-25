<?php include("connection.php");
session_start();

$user_id = $_SESSION["user_id"];
if($_SESSION["rank"] == 'dean')
{
	//$dep = $_SESSION["drc_dep"];
	$sid = $_GET['id'];
	$query = 'UPDATE `synopsis` SET `DEAN_APPROVAL_2` = "YES" WHERE `Synopsis_id` = "'.$sid.'"';
	$result = mysqli_query($conn,$query);
	$query1 = 'SELECT * FROM `synopsis` WHERE `Synopsis_id` = "'.$sid.'"';
	$result1 = mysqli_query($conn,$query1);
	$row = mysqli_fetch_array($result1);
	$tid = 'tid'.$row['Stu_ID'];
	$sup = $row['Supervisor1_id'];
	$dep = $row['Department'];
//	echo "Today is " . date("Y/m/d") . "<br>";
//	echo "Today is " . date("Y.m.d") . "<br>";
//	echo "Today is " . date("Y-m-d") . "<br>";
	
	//$dt = date("Y-m-d");
	//$thfile = "thesis".$tid.$dt;
	//$tufile = "turnitin".$tid.$dt;
	//$target_dir = "uploads/";
	//$target_file = $target_dir.basename($_FILES["thesis_file"][$thfile]);
	
	$query2 = 'INSERT INTO `thesis` (`Thesis_id`, `Synopsis_id`, `Supervisor`, `Department`) VALUES ("'.$tid.'", "'.$sid.'", "'.$sup.'", "'.$dep.'")';
	$result2 = mysqli_query($conn,$query2);
	//echo $query;
	//die();
	
	
	header('Location: dean_syno_approved.php');
	//echo "lkjhgfdsa";
}





?>