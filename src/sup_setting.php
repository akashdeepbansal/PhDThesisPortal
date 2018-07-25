<?php include("connection.php");


session_start();
$user_id = $_SESSION["user_id"];

if(isset($_POST['submit']))
{


	$pass1 = $_POST['password1'];
	$pass2 = $_POST['password2'];
	
	if($pass1 == $pass2)
	{
			$query = 'UPDATE `login_table` SET `Password` = "'.$pass1.'" WHERE `Entry_No` = "'.$user_id.'"';
			$result = mysqli_query($conn,$query);
			header('Location: index.php');
	}

echo "password does not match";

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

<form action="sup_setting.php" method="post">
<table align="center">
<tr>
<td align="right">Enter new Password:</td>
<td><input type="password" name="password1" /></td>
</tr>
<tr>
<td align="right">Enter Password Again:</td>
<td><input type="password" name="password2" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input name="submit" type="submit" class="button_submit" value="SUBMIT"></td>
</tr>
</table>
</form>



<p>
	For submitting new synopsis, go to tab in synopsis and select submit a new synopsis from there. You can view the status of synposis you already on the tab submitted synopsis in synopsis section. you can change the password from setting option in the menu bar. For submitting new thesis, your synopsis should have an examiner first, and if your synopsis got an examiner then you can go to the submit thesis section.
</p>	
	<br class="clearfix" />
</div>
	

</body>
</html>