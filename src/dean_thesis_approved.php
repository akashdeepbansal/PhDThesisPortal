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
//$dep = $_SESSION["dean_dep"];

$query = 'SELECT * FROM `thesis` WHERE `Dean_Approval_0` = "YES"';
$result = mysqli_query($conn,$query);
//echo $query;
//die();

?>
<table border="1" align="center">
<tr>
<td width="10%" align="center">S. No.</td>
<td width="10%" align="center">Thesis ID</td>
<td width="10%" align="center">Synopsis ID</td>
<td width="10%" align="center">Thesis Draft</td>
<td width="10%" align="center">Turnitin Report</td>
<td width="15%" align="center">Indian Examiner Review</td>
<td width="15%" align="center">Abroad Examiner Review</td>
<td width="20%" align="center">Approve Reviews</td>
</tr>
<?php 
$i = 1;
while($row = mysqli_fetch_array($result))
{
?>
<tr>
<td width="10%" align="center"><?php echo $i ?></td>
<td width="10%" align="center"><?php echo $row['Thesis_id'] ?></td>
<td width="10%" align="center"><a href="dean_synop_detail.php?id=<?php echo $row['Synopsis_id'] ?>"><?php echo $row['Synopsis_id'] ?></a></td>
<td width="10%" align="center"><a href="uploads/<?php echo $row['Thesis_File'] ?>" target="_blank">view file</a></td>
<td width="10%" align="center"><a href="uploads/<?php echo $row['Turnitin_File'] ?>" target="_blank">view file</a></td>
<td width="15%" align="center"><?php echo $row['Indian_Examiner_Review'] ?></td>
<td width="15%" align="center"><?php echo $row['Abroad_Examiner_Review'] ?></td>
<td width="20%" align="center"><?php if(($row['STATUS_ABR_REVIEW'] == 'YES') && ($row['STATUS_IND_REVIEW'] == 'YES')) { ?><a href="dean_thesis_review_approve.php?id=<?php echo $row['Thesis_id'] ?>">APPROVE REVIEWS</a><?php } else { ?><a href="#">APPROVE REVIEWS</a><?php }?></td>
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