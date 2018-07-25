<?php include("connection.php");

session_start();


if(isset($_POST['submit']))
{


	$tid = $_POST['tid'];
	$dt = date("Y-m-d");
	$thfile = "thesis".$tid;
	$tufile = "turnitin".$tid;
	$query0 = 'UPDATE `thesis` SET `Date_of_Submission` = "'.$dt.'" WHERE `Thesis_id` = "'.$tid.'"';
	$result0 = mysqli_query($conn,$query0);
	
	
	
	//$target_dir = "uploads/";
	//$target_file1 = $target_dir.basename($_FILES["thfile"][$thfile]);
	//$target_file2 = $target_dir.basename($_FILES["tufile"][$tufile]);

	
	
	$file = rand(1000,100000)."-.pdf".$_FILES['thfile'][$thfile];
    $file_loc = $_FILES['thfile']['tmp_name'];
 	$folder="uploads/";
 
	move_uploaded_file($file_loc,$folder.$file);
	$query1 = 'UPDATE `thesis` SET `Thesis_File` = "'.$file.'" WHERE `Thesis_id` = "'.$tid.'"';
	$result1 = mysqli_query($conn,$query1);
	
	
	$file = rand(1000,100000)."-".$_FILES['tufile'][$tufile];
    $file_loc = $_FILES['tufile']['tmp_name'];
 	$folder="uploads/";
 
	move_uploaded_file($file_loc,$folder.$file);
	$query2 = 'UPDATE `thesis` SET `Turnitin_File` = "'.$file.'" WHERE `Thesis_id` = "'.$tid.'"';
	$result2 = mysqli_query($conn,$query2);
	
	$query3 = 'UPDATE `thesis` SET `STATUS_SUBMISSION` = "YES" WHERE `Thesis_id` = "'.$tid.'"';
	$result3 = mysqli_query($conn,$query3);
	
	
	
	
	header('Location: sup_sub_thesis.php');
	
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
		
		<li><a href="sup_setting.php">Setting</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<br class="clearfix" />
</div>
<div id="page">
<form action="sup_submit_thesis.php" method="post" enctype="multipart/form-data">
<?php 
$tid = $_GET['id'];
$query = 'SELECT * FROM `thesis` WHERE `Thesis_id` = "'.$tid.'"';
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
?>
<table border="1" align="center" width="100%">
<tr>
<td width="40%" style="font-size:20px; text-align:center; text-decoration:underline">Thesis id</td>
<td width="60%" align="center"><input type="text" size="50%" style="font-size:20px; text-align:center; text-decoration:underline" name="tid" value="<?php echo $tid; ?>" readonly="true" /></td>
</tr>
<tr>
<td style="font-size:20px; text-align:center; text-decoration:underline">Synopsis id</td>
<td align="center"><input type="text" size="50%" name="sid" style="font-size:20px; text-align:center; text-decoration:underline" value="<?php echo $row['Synopsis_id'] ?>" readonly="true" /></td>
</tr>

<tr>
<td align="center" style="font-size:20px; text-align:center; text-decoration:underline">Attach Thesis File</td>
<td align="center"><input type="file" style="font-size:20px; text-align:center;" name="thfile"  /></td>
</tr>
<tr>
<td style="font-size:20px; text-align:center; text-decoration:underline" align="center">Attach Turnitin File</td>
<td align="center"><input type="file" style="font-size:20px; text-align:center;" name="tufile" /></td>
</tr>
<tr><td colspan="2" align="center">
<input type="submit" style="background:#FFFFFF; font-size:24px; font-weight:bold; text-align:center" name="submit" value="SUBMIT" /></td></tr>


</table>

<table align="center" width="100%">
</table>
</form>
	<br class="clearfix" />
</div>
	

	

</body>
</html>