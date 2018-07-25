<?php include("connection.php");

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$log_as = $_POST['login_as'];
	
	session_start();
	if($log_as == 'EXAMINER')
	{
		$query_exa = 'SELECT * FROM `examiners` WHERE `User_id` = "'.$username.'" and `Password` = "'.$password.'"';
		$result_exa = mysqli_query($conn,$query_exa);	
		$rowcount_exa = mysqli_num_rows($result_exa);
		if($rowcount_exa>0)
		{
			$_SESSION["user_id"] = $username;		
			$row_exa = mysqli_fetch_array($result_exa);	
			if($row_exa['Status_live_dead'] == 'LIVE')
			{
				$_SESSION["rank"] = 'examiner';
				header('Location: exa_home_page.php');
			}
		}
		
	}
	else
	{
	
		$query = 'SELECT * FROM `login_table` WHERE `Entry_No` = "'.$username.'" and `Password` = "'.$password.'"';
		$result = mysqli_query($conn,$query);
		
		$rowcount = mysqli_num_rows($result);
	
		
		if($rowcount>0)
		{
	
			//echo "i am here";
			//die();
		
			$_SESSION["user_id"] = $username;
		
			$row = mysqli_fetch_array($result);
		
			if($row['Rank'] == 'Supervisor')
			{
				$_SESSION["rank"] = 'supervisor';
				header('Location: sup_home_page.php');
			}
		
			if($row['Rank'] == 'Dean')
			{
				$_SESSION["rank"] = 'dean';
				header('Location: dean_home_page.php');
			}
		
		
		
			if($row['Rank'] == 'DRC')
			{
				$_SESSION["rank"]='drc';
				$_SESSION["drc_dep"] = $row['Department'];
				header('Location: drc_home_page.php');
			}
		
		}
	}
	//die();
	
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<style>
.button_submit {
    background-color: #6E6E6E;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100px;
}


</style>
<title>PhD PORTAL</title>
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

<div id="header">
	<div id="logo">
		<h1 align="center"><a href="#">PhD Thesis Submission PORTAL</a></h1>
	</div>
</div>

<div id="page">
<form action="index.php" method="post">
	<div align="center">Username: <input type="text" name="username" /></div>
	<div align="center">Password:&nbsp; <input type="password" name="password" /></div>
	<div align="center">
		<input type="radio" name="login_as" value="SUPERVISOR"> SUPERVISOR
  		<input type="radio" name="login_as" value="DRC_CHAIR"> DRC CHAIR
  		<input type="radio" name="login_as" value="DEAN"> DEAN
		<input type="radio" name="login_as" value="EXAMINER"> EXAMINER
  	</div>
	
	<div align="center"><input name="submit" type="submit" class="button_submit" value="LOGIN"></div>
</form>
<p align="center">
Student will submit the synopsis(in pdf format) through synopsis submission form
Supervisor will send the synopsis to Dean
Dean will check the examiners’ name and send mails to examiners
Dean (on his Dashboard on this  portal)  can see all the thesis under examination
Examiners can accept or reject to examine the thesis. If rejected, Dean can assign next examiners

</p>	
	<br class="clearfix" />
</div>
	

	

</body>
</html>