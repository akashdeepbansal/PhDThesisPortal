<?php include("connection.php");
session_start();

if($_SESSION["rank"] != 'dean')
{
	header('Location: index.php');
}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>PHD PORTAL</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
		
	});
</script>
</head>
<body>

	<div id="headour">
		<div id="logour">
			<h1><a href="#">PHD PORTAL</a></h1>
		</div>
	</div>
<div id="menu">
<!--
		<li class="first">
			<span class="opener">Services<b></b></span>
			<ul>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Consequat Dolor</a></li>
				<li><a href="#">Magna Feugiat</a></li>
				<li>
					<span>Sed Tempus<b></b></span>
					<ul>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Consequat Dolor</a></li>
						<li><a href="#">Magna Feugiat</a></li>
						<li><a href="#">Sed Tempus</a></li>
						<li><a href="#">Etiam Nullam</a></li>
						<li><a href="#">Amet Phasellus</a></li>
					</ul>
				</li>
				<li><a href="#">Etiam Nullam</a></li>
				<li><a href="#">Amet Phasellus</a></li>
			</ul>
		</li>
	-->
	<ul>
		<li><a href="#">Home</a></li>
		<li>
			<span class="opener">Synopsis<b></b></span>
			<ul>
				<li><a href="dean_syno_pending.php">Pending For Approval</a></li>
				<li><a href="dean_syno_approved.php">Approved</a></li>
				<li><a href="dean_syno_rejected.php">Rejected</a></li>
			</ul>
		</li>
		<li>
			<span class="opener">Thesis<b></b></span>
			<ul>
				<li><a href="dean_thesis_pending.php">Pending For Approval</a></li>
				<li><a href="dean_thesis_approved.php">Approved</a></li>
			</ul>
		</li>
	<!--
		<li>
			<span class="opener">Support<b></b></span>
			<ul>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Consequat Dolor</a></li>
				<li><a href="#">Magna Feugiat</a></li>
				<li>
					<span>Sed Tempus<b></b></span>
					<ul>
						<li><a href="#">Lorem Ipsum</a></li>
						<li><a href="#">Consequat Dolor</a></li>
						<li><a href="#">Magna Feugiat</a></li>
						<li><a href="#">Sed Tempus</a></li>
						<li><a href="#">Etiam Nullam</a></li>
						<li><a href="#">Amet Phasellus</a></li>
					</ul>
				</li>
				<li><a href="#">Etiam Nullam</a></li>
				<li><a href="#">Amet Phasellus</a></li>
			</ul>
		</li>
	-->
		
		<li><a href="dean_setting.php">Setting</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<br class="clearfix" />
</div>
<div id="page">



<?php 

$sid = $_GET["id"];

$query = 'SELECT * FROM `examiners` WHERE `Synopsis_id` = "'.$sid.'"';
$result = mysqli_query($conn,$query);
//echo $query;
//die();

?>
<table border="1" align="center" width="100%">
<tr>
<td align="center">S. No.</td>
<td align="center">Examiner Id</td>
<td align="center">Examiner Name</td>
<td align="center">Priority Assigned</td>
<td align="center">Set Priority</td>
<td align="center">Abroad or India</td>
<td align="center">To Send mail Click on the button</td>
<td align="center">Status of Acceptance or Rejection</td>
</tr>
<?php 
$i = 1;

while($row = mysqli_fetch_array($result))
{
?>
<tr>
<td width="5%" align="center"><?php echo $i ?></td>
<td width="15%" align="center"><?php echo $row['User_id'] ?></td>
<td width="15%" align="center"><?php echo $row['Name'] ?></td>
<td width="5%" align="center"><?php echo $row['Priority'] ?></td>
<td width="15%" align="center"><a href="dean_syno_priority1.php?eid=<?php echo $row['User_id'] ?>">Priority-1</a> &nbsp;&nbsp; <a href="dean_syno_priority2.php?eid=<?php echo $row['User_id'] ?>">Priority-2</a> &nbsp;&nbsp; <a href="dean_syno_priority3.php?eid=<?php echo $row['User_id'] ?>">Priority-3</a> &nbsp;&nbsp; <a href="dean_syno_priority4.php?eid=<?php echo $row['User_id'] ?>">Priority-4</a></td>
<td width="15%" align="center"><?php echo $row['ABROAD_OR_INDIA'] ?></td>
<td width="15%" align="center"><a href="mail.php?eid=<?php echo $row['User_id'] ?>">Click me to send mail</a></td>
<td width="15" align="center"><?php echo $row['Status_accepted_rejected'] ?></td>
</tr>


<?php
$i = $i + 1;


}
?>

<tr>
</tr>
</table>
<p>
	For submitting approving pending synopsis, go to tab in synopsis and select pending for approval option from there. You can view the status of synposis you have approved in past on the tab Approved in synopsis section Only. you can change the password from setting option in the menu bar. For approving pending thesis, you can go to the approve pending thesis in thesis section.
</p>	
	<br class="clearfix" />
</div>
	

	

</body>
</html>