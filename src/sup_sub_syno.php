<?php include("connection.php");
session_start();
$user_id = $_SESSION["user_id"];

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
				<li><a href="sup_sub_syno.php">Submitted Synopsis</a></li>
				<li><a href="sup_new_syno.php">Submit New Synopsis</a></li>
				<li><a href="sup_pen_syno.php">Pending Synopsis Submissions</a></li>
			</ul>
		</li>
		<li>
			<span class="opener">Thesis<b></b></span>
			<ul>
				<li><a href="sup_sub_thesis.php">Submitted Thesis</a></li>
				<li><a href="sup_new_thesis.php">Submit New Thesis</a></li>
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
		
		<li><a href="sup_setting.php">Setting</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<br class="clearfix" />
</div>
<div id="page">

<?php 

$query = 'SELECT * FROM `synopsis` WHERE `Supervisor1_id` = "'.$user_id.'" and `Status_Examiner_Details` = "YES"';
$result = mysqli_query($conn,$query);
//echo $query;
//die();

?>
<table border="1">
<tr>
<td width="5%" align="center">S. No.</td>
<td width="10%" align="center">Synopsis ID</td>
<td width="15%" align="center">Title of Synopsis</td>
<td width="10%" align="center">Student ID</td>
<td width="10%" align="center">DRC APPROVAL</td>
<td width="10%" align="center">DEAN APPROVAL</td>
<td width="15" align="center">Status of Examiner Assignment</td>
<td width="25%" align="center">Click on Respective Button to view complete details</td>
</tr>
<?php 
$i = 1;
while($row = mysqli_fetch_array($result))
{
?>
<tr>
<td width="5%" align="center"><?php echo $i ?></td>
<td width="10%" align="center"><?php echo $row['Synopsis_id'] ?></td>
<td width="15%" align="center"><?php echo $row['Title'] ?></td>
<td width="10%" align="center"><?php echo $row['Stu_ID'] ?></td>
<td width="10%" align="center"><?php echo $row['DRC_APPROVAL'] ?></td>
<td width="10%" align="center"><?php echo $row['DEAN_APPROVAL_0'] ?></td>
<td width="15" align="center"><?php echo $row['Status_Examiner_Assignment'] ?></td>
<td width="20%" align="center"><a href="sup_syno_detail.php?id=<?php echo $row['Synopsis_id'] ?>">Click here to view details</a></td>
</tr>
<?php
$i = $i + 1;
}
?>

<tr>
</tr>
</table>


<p>
	For submitting new synopsis, go to tab in synopsis and select submit a new synopsis from there. You can view the status of synposis you already on the tab submitted synopsis in synopsis section. you can change the password from setting option in the menu bar. For submitting new thesis, your synopsis should have an examiner first, and if your synopsis got an examiner then you can go to the submit thesis section.
</p>	
	<br class="clearfix" />
</div>
	

	

</body>
</html>