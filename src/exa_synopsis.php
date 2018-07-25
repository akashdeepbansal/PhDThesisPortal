<?php include("connection.php");
session_start();

if($_SESSION["rank"] != 'examiner')
{
	header('Location: index.php');
}

 
$query0 = 'SELECT * FROM `examiners` WHERE `User_id` = "'.$_SESSION['user_id'].'"';
$result0 = mysqli_query($conn,$query0);
$row0 = mysqli_fetch_array($result0);
$abroad_india = $row0['ABROAD_OR_INDIA'];
$ab_in = "ssa";
if($abroad_india == 'ABROAD')
{
	$ab_in = 'ABR_REVIEW';
}
else
{
	$ab_in = 'IND_REVIEW';
}
$syno_id = $row0['Synopsis_id'];



if(isset($_POST['submit']))
{
	$review = $_POST['review'];
	$query = 'UPDATE `synopsis` SET `'.$ab_in.'` = "'.$review.'" WHERE `Synopsis_id` = "'.$syno_id.'"';
	$query11 = 'UPDATE `synopsis` SET `STATUS_'.$ab_in.'` = "YES" WHERE `Synopsis_id` = "'.$syno_id.'"';
	//$query = 'SELECT * FROM `login_table` WHERE `Entry_No` = "'.$username.'"';
	
	
	$result = mysqli_query($conn,$query);
	$result11 = mysqli_query($conn,$query11);
}

$query1 = 'SELECT * FROM `synopsis` WHERE `Synopsis_id` = "'.$syno_id.'"';
$result1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($result1);


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
	<ul>
		<li><a href="exa_home_page.php">Home</a></li>
		<li><a href="exa_synopsis.php">Synopsis</a></li>
		<li><a href="exa_thesis.php">Thesis</a></li>
		<li><a href="exa_setting.php">Setting</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<br class="clearfix" />
</div>
<div id="page">
<table border="1" align="center" width="60%">
<tr>
<td align="center"><strong>Title of Thesis</strong></td>
<td align="center"><?php echo $row1['Title'] ?></td>
<td align="center"><strong>Department</strong></td>
<td align="center"><?php echo $row1['Department'] ?></td>
</tr>
<tr>
<td align="center"><strong>Student Entry No.</strong></td>
<td align="center"><?php echo $row1['Stu_ID'] ?></td>
<td align="center"><strong>Student Name</strong></td>
<td align="center"><?php echo $row1['Stu_NAME'] ?></td>
</tr>
<tr align="center"><td colspan="2"><strong>Synopsis File: -</strong></td>
<td align="center" colspan="2"><a href="uploads/<?php echo $row1['Synopsis_File'] ?>" target="_blank">view file</a></td>
</tr>
</table>
<form action="exa_synopsis.php" method="post">
<table border="0" align="center" width="60%">
<tr><td><strong>Give your review on the Synopsis : -</strong></td></tr>
<tr><td align="center"><textarea rows="8" cols="120" name="review">
<?php echo $row1[$ab_in] ?></textarea>
</td></tr>
<tr>
<td align="right"><input style="background-color:#CCCCCC; font-size:16px; font-weight:bold" type="submit" value="SUBMIT YOUR REVIEW" name="submit" /></td></tr>

</table>
</form>
<p>
	For submitting approving pending synopsis, go to tab in synopsis and select pending for approval option from there. You can view the status of synposis you have approved in past on the tab Approved in synopsis section Only. you can change the password from setting option in the menu bar. For approving pending thesis, you can go to the approve pending thesis in thesis section.
</p>	
	<br class="clearfix" />
</div>
	

	

</body>
</html>