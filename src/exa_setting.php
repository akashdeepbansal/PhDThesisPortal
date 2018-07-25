<?php include("connection.php");
session_start();

if($_SESSION["rank"] != 'examiner')
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
<p>
	For submitting approving pending synopsis, go to tab in synopsis and select pending for approval option from there. You can view the status of synposis you have approved in past on the tab Approved in synopsis section Only. you can change the password from setting option in the menu bar. For approving pending thesis, you can go to the approve pending thesis in thesis section.
</p>	
	<br class="clearfix" />
</div>
	

	

</body>
</html>