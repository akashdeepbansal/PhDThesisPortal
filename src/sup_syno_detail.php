<?php include("connection.php");
session_start();


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
$sid = $_GET["id"];

$query = 'SELECT * FROM `synopsis` WHERE `Synopsis_id` = "'.$sid.'"';
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
?>

<table border="1" align="center" width="60%">
<tr>
<td align="center">Title of Thesis</td>
<td align="center"><?php echo $row['Title'] ?></td>
<td align="center">Department</td>
<td align="center"><?php echo $row['Department'] ?></td>
</tr>
<tr>
<td align="center">Student Entry No.</td>
<td align="center"><?php echo $row['Stu_ID'] ?></td>
<td align="center">Student Name</td>
<td align="center"><?php echo $row['Stu_NAME'] ?></td>
</tr>
<tr>
<td align="center">Date of Submission</td>
<td align="center"><?php echo $row['Date_of_Submission'] ?></td>
<td align="center">FILE ATTACHED</td>
<td align="center"><a href="uploads/<?php echo $row['Synopsis_File'] ?>" target="_blank">view file</a></td>
</tr>
<tr><td colspan="4">Name of Supervisor(s): -</td></tr>
<tr>
<td align="center">1. &nbsp;&nbsp; Name</td>
<td align="center"><?php echo $row['Supervisor1_name'] ?></td>
<td align="center">Employee Code</td>
<td align="center"><?php echo $row['Supervisor1_id'] ?></td>
</tr>
<tr>
<td align="center">2. &nbsp;&nbsp; Name</td>
<td align="center"><?php echo $row['Supervisor2_name'] ?></td>
<td align="center">Employee Code</td>
<td align="center"><?php echo $row['Supervisor2_id'] ?></td>
</tr>
<tr>
<td align="center">3. &nbsp;&nbsp;  Name</td>
<td align="center"><?php echo $row['Supervisor3_name'] ?></td>
<td align="center">Employee Code</td>
<td align="center"><?php echo $row['Supervisor3_id'] ?></td>
</tr>
</table>
<table border="1" align="center" width="60%">
<tr>
<td width="20%" align="center">ABROAD EXAMINER REVIEW</td>
<td width="80%" align="center"><?php echo $row['ABR_REVIEW'] ?></td>
</tr>
<tr>
<td align="center">INDIAN EXAMINER REVIEW</td>
<td align="center"><?php echo $row['IND_REVIEW'] ?></td>
</tr>
</table>
<p>
Click on next button to add examiners for your synopsis, you can also add examiners in some other sessions by going to the add examiner option in synopsis section
</p>	
	<br class="clearfix" />
</div>
	

	

</body>
</html>