<?php include("connection.php");


//hhhhhhh
//insert all details in the synopsis table, pass the synopsis id to the next page sup_new_syno1.php where all the deatils related to examiners will be filled.

if(isset($_POST['submit']))
{
	
	$title = $_POST['title_thesis'];
	$department = $_POST['department'];
	$student_id = $_POST['stu_id'];
	$student_name = $_POST['stu_name'];
	$sup1_id = $_POST['sup1_id'];
	$sup1_name = $_POST['sup1_name'];
	$sup2_id = $_POST['sup2_id'];
	$sup3_id = $_POST['sup3_id'];
	$sup2_name = $_POST['sup2_name'];
	$sup3_name = $_POST['sup3_name'];
	$synopsis_id = 'sid'.$student_id;
	
	$syno_file = "synofile";
	
	$file = rand(1000,100000)."-.pdf".$_FILES['syno_file'][$syno_file];
    $file_loc = $_FILES['syno_file']['tmp_name'];
 	$folder="uploads/";
 
	move_uploaded_file($file_loc,$folder.$file);
	
	
	$query = 'INSERT INTO `synopsis` (`Synopsis_id`, `Title`, `Department`, `Stu_ID`, `Stu_NAME`, `Supervisor1_id`, `Supervisor2_id`, `Supervisor3_id`, `Supervisor1_name`, `Supervisor2_name`, `Supervisor3_name`, `Synopsis_File`) VALUES ("'.$synopsis_id.'", "'.$title.'" , "'.$department.'" , "'.$student_id.'", "'.$student_name.'", "'.$sup1_id.'", "'.$sup2_id.'", "'.$sup3_id.'", "'.$sup1_name.'", "'.$sup2_name.'", "'.$sup3_name.'","'.$file.'")';
	
	//$query = 'SELECT * FROM `login_table` WHERE `Entry_No` = "'.$username.'"';
	
	
	$result = mysqli_query($conn,$query);
	header('Location: sup_add_examiner.php?id='.$synopsis_id);
	//$rowcount = mysqli_num_rows($result);

	
	//if($rowcount>0)
	//{
		//echo "i am here";
		//die();
		//header('Location: sup_home_page.php');
	//}
	//die();
	
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
<form action="sup_new_syno.php" method="post" enctype="multipart/form-data">
<table border="1" align="center" width="100%">
<tr>
<td>Title of Thesis</td>
<td><input type="text" size="50%" name="title_thesis" /></td>
<td>Department</td>
<td><select style="width:59%" name="department">
    <option value="Computer">Computer Science Engg.</option>
    <option value="Civil">Civil Engg.</option>
    <option value="Mechanical">Mechanical Engg.</option>
    <option value="Electrical">Electrical Engg.</option>
  </select>
</td>
</tr>
<tr>
<td>Student Entry No.</td>
<td><input type="text" size="50%" name="stu_id" /></td>
<td>Student Name</td>
<td><input type="text" size="50%" name="stu_name" /></td>
</tr>
<tr><td colspan="4">Name of Supervisor(s): -</td></tr>
<tr>
<td>1. Name</td>
<td><input type="text" size="50%" name="sup1_name" /></td>
<td>Employee Code</td>
<td><input type="text" size="50%" name="sup1_id" /></td>
</tr>
<tr>
<td>2. Name</td>
<td><input type="text" size="50%" name="sup2_name" /></td>
<td>Employee Code</td>
<td><input type="text" size="50%" name="sup2_id" /></td>
</tr>
<tr>
<td>3. Name</td>
<td><input type="text" size="50%" name="sup3_name" /></td>
<td>Employee Code</td>
<td><input type="text" size="50%" name="sup3_id" /></td>
</tr>
<tr><td colspan="2" align="center">Attach Synopsis File</td>
<td colspan="2" align="center"><input type="file" style="font-size:20px; text-align:center;" name="syno_file"  /></td>
</tr>
<tr><td colspan="4" align="center">
<input type="submit" name="submit" style="background:#FFFFFF; font-size:18px; font-weight:bold; text-align:center" value="Next" />
</td></tr>
</table>
</form>
<p>
Click on next button to add examiners for your synopsis, you can also add examiners in some other sessions by going to the add examiner option in synopsis section
</p>	
	<br class="clearfix" />
</div>
	

	

</body>
</html>