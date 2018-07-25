<?php include("connection.php");

session_start();

//hhhhhhh
//insert all details in the synopsis table, pass the synopsis id to the next page sup_new_syno1.php where all the deatils related to examiners will be filled.

if(isset($_POST['submit']))
{
	$abr_exa1_nam = $_POST['abr_exa1_nam'];
	$abr_exa1_des = $_POST['abr_exa1_des'];
	$abr_exa1_add = $_POST['abr_exa1_add'];
	$abr_exa1_ema = $_POST['abr_exa1_ema'];
	$abr_exa1_pho = $_POST['abr_exa1_pho'];
	$abr_exa1_fax = $_POST['abr_exa1_fax'];
	$abr_exa1_spe = $_POST['abr_exa1_spe'];
	$abr_exa1_pri = '1';
	
	
	$abr_exa2_nam = $_POST['abr_exa2_nam'];
	$abr_exa2_des = $_POST['abr_exa2_des'];
	$abr_exa2_add = $_POST['abr_exa2_add'];
	$abr_exa2_ema = $_POST['abr_exa2_ema'];
	$abr_exa2_pho = $_POST['abr_exa2_pho'];
	$abr_exa2_fax = $_POST['abr_exa2_fax'];
	$abr_exa2_spe = $_POST['abr_exa2_spe'];
	$abr_exa2_pri = '2';
	
	$abr_exa3_nam = $_POST['abr_exa3_nam'];
	$abr_exa3_des = $_POST['abr_exa3_des'];
	$abr_exa3_add = $_POST['abr_exa3_add'];
	$abr_exa3_ema = $_POST['abr_exa3_ema'];
	$abr_exa3_pho = $_POST['abr_exa3_pho'];
	$abr_exa3_fax = $_POST['abr_exa3_fax'];
	$abr_exa3_spe = $_POST['abr_exa3_spe'];
	$abr_exa3_pri = '3';
	
	$abr_exa4_nam = $_POST['abr_exa4_nam'];
	$abr_exa4_des = $_POST['abr_exa4_des'];
	$abr_exa4_add = $_POST['abr_exa4_add'];
	$abr_exa4_ema = $_POST['abr_exa4_ema'];
	$abr_exa4_pho = $_POST['abr_exa4_pho'];
	$abr_exa4_fax = $_POST['abr_exa4_fax'];
	$abr_exa4_spe = $_POST['abr_exa4_spe'];
	$abr_exa4_pri = '4';
	
	$ind_exa1_nam = $_POST['ind_exa1_nam'];
	$ind_exa1_des = $_POST['ind_exa1_des'];
	$ind_exa1_add = $_POST['ind_exa1_add'];
	$ind_exa1_ema = $_POST['ind_exa1_ema'];
	$ind_exa1_pho = $_POST['ind_exa1_pho'];
	$ind_exa1_fax = $_POST['ind_exa1_fax'];
	$ind_exa1_spe = $_POST['ind_exa1_spe'];
	$ind_exa1_pri = '1';
	
	$ind_exa2_nam = $_POST['ind_exa2_nam'];
	$ind_exa2_des = $_POST['ind_exa2_des'];
	$ind_exa2_add = $_POST['ind_exa2_add'];
	$ind_exa2_ema = $_POST['ind_exa2_ema'];
	$ind_exa2_pho = $_POST['ind_exa2_pho'];
	$ind_exa2_fax = $_POST['ind_exa2_fax'];
	$ind_exa2_spe = $_POST['ind_exa2_spe'];
	$ind_exa2_pri = '2';
	
	$ind_exa3_nam = $_POST['ind_exa3_nam'];
	$ind_exa3_des = $_POST['ind_exa3_des'];
	$ind_exa3_add = $_POST['ind_exa3_add'];
	$ind_exa3_ema = $_POST['ind_exa3_ema'];
	$ind_exa3_pho = $_POST['ind_exa3_pho'];
	$ind_exa3_fax = $_POST['ind_exa3_fax'];
	$ind_exa3_spe = $_POST['ind_exa3_spe'];
	$ind_exa3_pri = '3';
	
	$ind_exa4_nam = $_POST['ind_exa4_nam'];
	$ind_exa4_des = $_POST['ind_exa4_des'];
	$ind_exa4_add = $_POST['ind_exa4_add'];
	$ind_exa4_ema = $_POST['ind_exa4_ema'];
	$ind_exa4_pho = $_POST['ind_exa4_pho'];
	$ind_exa4_fax = $_POST['ind_exa4_fax'];
	$ind_exa4_spe = $_POST['ind_exa4_spe'];
	$ind_exa4_pri = '4';
	
	$synopsis_id = $_POST['sid'];
	$abr_exa1_id = "abr_exa1".$synopsis_id;
	$abr_exa2_id = "abr_exa2".$synopsis_id;
	$abr_exa3_id = "abr_exa3".$synopsis_id;
	$abr_exa4_id = "abr_exa4".$synopsis_id;
	
	
	$ind_exa1_id = "ind_exa1".$synopsis_id;
	$ind_exa2_id = "ind_exa2".$synopsis_id;
	$ind_exa3_id = "ind_exa3".$synopsis_id;
	$ind_exa4_id = "ind_exa4".$synopsis_id;
	
	$abr_ind = "ABROAD";
	$ind_abr = "INDIA";
	
	
	$query1 = 'INSERT INTO `examiners` (`User_id`, `Password`, `Name`, `Synopsis_id`, `Designation`, `ABROAD_OR_INDIA`, `Address`, `Email_id`, `Phone`, `Fax`, `Specialization`, `Priority`) VALUES ("'.$abr_exa1_id.'", "'.$abr_exa1_id.'" , "'.$abr_exa1_nam.'" , "'.$synopsis_id.'", "'.$abr_exa1_des.'", "'.$abr_ind.'", "'.$abr_exa1_add.'", "'.$abr_exa1_ema.'", "'.$abr_exa1_pho.'", "'.$abr_exa1_fax.'", "'.$abr_exa1_spe.'", "'.$abr_exa1_pri.'")';
	
	
//	if($abr_exam2_nam != '')
//	{
	$query2 = 'INSERT INTO `examiners` (`User_id`, `Password`, `Name`, `Synopsis_id`, `Designation`, `ABROAD_OR_INDIA`, `Address`, `Email_id`, `Phone`, `Fax`, `Specialization`, `Priority`) VALUES ("'.$abr_exa2_id.'", "'.$abr_exa2_id.'" , "'.$abr_exa2_nam.'" , "'.$synopsis_id.'", "'.$abr_exa2_des.'", "'.$abr_ind.'", "'.$abr_exa2_add.'", "'.$abr_exa2_ema.'", "'.$abr_exa2_pho.'", "'.$abr_exa2_fax.'", "'.$abr_exa2_spe.'", "'.$abr_exa2_pri.'")';
//	}
	
//	if($abr_exam3_nam != '')
//	{
	$query3 = 'INSERT INTO `examiners` (`User_id`, `Password`, `Name`, `Synopsis_id`, `Designation`, `ABROAD_OR_INDIA`, `Address`, `Email_id`, `Phone`, `Fax`, `Specialization`, `Priority`) VALUES ("'.$abr_exa3_id.'", "'.$abr_exa3_id.'" , "'.$abr_exa3_nam.'" , "'.$synopsis_id.'", "'.$abr_exa3_des.'", "'.$abr_ind.'", "'.$abr_exa3_add.'", "'.$abr_exa3_ema.'", "'.$abr_exa3_pho.'", "'.$abr_exa3_fax.'", "'.$abr_exa3_spe.'", "'.$abr_exa3_pri.'")';
//	}

	$query7 = 'INSERT INTO `examiners` (`User_id`, `Password`, `Name`, `Synopsis_id`, `Designation`, `ABROAD_OR_INDIA`, `Address`, `Email_id`, `Phone`, `Fax`, `Specialization`, `Priority`) VALUES ("'.$abr_exa4_id.'", "'.$abr_exa4_id.'" , "'.$abr_exa4_nam.'" , "'.$synopsis_id.'", "'.$abr_exa4_des.'", "'.$abr_ind.'", "'.$abr_exa4_add.'", "'.$abr_exa4_ema.'", "'.$abr_exa4_pho.'", "'.$abr_exa4_fax.'", "'.$abr_exa4_spe.'", "'.$abr_exa4_pri.'")';



	$query4 = 'INSERT INTO `examiners` (`User_id`, `Password`, `Name`, `Synopsis_id`, `Designation`, `ABROAD_OR_INDIA`, `Address`, `Email_id`, `Phone`, `Fax`, `Specialization`, `Priority`) VALUES ("'.$ind_exa1_id.'", "'.$ind_exa1_id.'" , "'.$ind_exa1_nam.'" , "'.$synopsis_id.'", "'.$ind_exa1_des.'", "'.$ind_abr.'", "'.$ind_exa1_add.'", "'.$ind_exa1_ema.'", "'.$ind_exa1_pho.'", "'.$ind_exa1_fax.'", "'.$ind_exa1_spe.'", "'.$ind_exa1_pri.'")';
	
	//if($ind_exam2_nam != '')
	//{
	$query5 = 'INSERT INTO `examiners` (`User_id`, `Password`, `Name`, `Synopsis_id`, `Designation`, `ABROAD_OR_INDIA`, `Address`, `Email_id`, `Phone`, `Fax`, `Specialization`, `Priority`) VALUES ("'.$ind_exa2_id.'", "'.$ind_exa2_id.'" , "'.$ind_exa2_nam.'" , "'.$synopsis_id.'", "'.$ind_exa2_des.'", "'.$ind_abr.'", "'.$ind_exa2_add.'", "'.$ind_exa2_ema.'", "'.$ind_exa2_pho.'", "'.$ind_exa2_fax.'", "'.$ind_exa2_spe.'", "'.$ind_exa2_pri.'")';
	//}
	
	//if($ind_exam3_nam != '')
	//{
	$query6 = 'INSERT INTO `examiners` (`User_id`, `Password`, `Name`, `Synopsis_id`, `Designation`, `ABROAD_OR_INDIA`, `Address`, `Email_id`, `Phone`, `Fax`, `Specialization`, `Priority`) VALUES ("'.$ind_exa3_id.'", "'.$ind_exa3_id.'" , "'.$ind_exa3_nam.'" , "'.$synopsis_id.'", "'.$ind_exa3_des.'", "'.$ind_abr.'", "'.$ind_exa3_add.'", "'.$ind_exa3_ema.'", "'.$ind_exa3_pho.'", "'.$ind_exa3_fax.'", "'.$ind_exa3_spe.'", "'.$ind_exa3_pri.'")';
	//}
	$query8 = 'INSERT INTO `examiners` (`User_id`, `Password`, `Name`, `Synopsis_id`, `Designation`, `ABROAD_OR_INDIA`, `Address`, `Email_id`, `Phone`, `Fax`, `Specialization`, `Priority`) VALUES ("'.$ind_exa4_id.'", "'.$ind_exa4_id.'" , "'.$ind_exa4_nam.'" , "'.$synopsis_id.'", "'.$ind_exa4_des.'", "'.$ind_abr.'", "'.$ind_exa4_add.'", "'.$ind_exa4_ema.'", "'.$ind_exa4_pho.'", "'.$ind_exa4_fax.'", "'.$ind_exa4_spe.'", "'.$ind_exa4_pri.'")';
	


	//$query = 'SELECT * FROM `login_table` WHERE `Entry_No` = "'.$username.'"';
	
	
	$result1 = mysqli_query($conn,$query1);
	
	if($abr_exam2_nam != '')
	{
	$result2 = mysqli_query($conn,$query2);
	}
	
	if($abr_exam3_nam != '')
	{
	$result3 = mysqli_query($conn,$query3);
	}
	
	if($abr_exam4_nam != '')
	{
	$result7 = mysqli_query($conn,$query7);
	}
	
	$result4 = mysqli_query($conn,$query4);
	
	if($ind_exam2_nam != '')
	{
	$result5 = mysqli_query($conn,$query5);
	}
	
	if($ind_exam3_nam != '')
	{
	$result6 = mysqli_query($conn,$query6);
	}
	
	if($ind_exam4_nam != '')
	{
	$result8 = mysqli_query($conn,$query8);
	}
	
	
	
	$query9 = 'UPDATE `synopsis` SET `Status_Examiner_Details` = "Yes" WHERE `Synopsis_id` = "'.$synopsis_id.'"';
	
	$result9 = mysqli_query($conn,$query9);
	
	//UPDATE `synopsis` SET `Status_Examiner_Details` = 'NO' WHERE `Synopsis_id` = "sid2014CS10222"
	
	header('Location: sup_sub_syno.php');
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
<form action="sup_add_examiner.php" method="post">
<?php 
$sid = $_GET['id'];
$query = 'SELECT * FROM `Synopsis` WHERE `Synopsis_id` = "'.$sid.'"';
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
?>
<table border="1" align="center" width="100%">
<tr>
<td colspan="2" style="font-size:20px; text-align:center; text-decoration:underline">Synopsis id</td>
<td colspan="2" align="center"><input type="text" size="50%" style="font-size:20px; text-align:center; text-decoration:underline" name="sid" value="<?php echo $sid; ?>" readonly="true" /></td>
<td colspan="2" style="font-size:20px; text-align:center; text-decoration:underline">Title of Thesis</td>
<td colspan="2" align="center"><input type="text" size="50%" name="title_thesis" style="font-size:20px; text-align:center; text-decoration:underline" value="<?php echo $row['Title'] ?>" readonly="true" /></td>
</tr>
</table>
<table>
<tr><td colspan="8">Examiners from Abroad: -</td></tr>
<tr>
<td align="center">S.No.</td>
<td align="center">Name</td>
<td align="center">Designation</td>
<td align="center">Complete Address (include zip & country code)</td>
<td align="center">Email</td>
<td align="center">Phone(include country code & city code)</td>
<td align="center">Fax (include ocuntry code & city code)</td>
<td align="center">Area of specialization</td>
</tr>
<tr>
<td align="center">1.</td>
<td><input type="text" name="abr_exa1_nam" /></td>
<td><input type="text" name="abr_exa1_des" /></td>
<td><input type="text" size="50%" name="abr_exa1_add" /></td>
<td><input type="text" size="45%" name="abr_exa1_ema" /></td>
<td><input type="text" size="30%" name="abr_exa1_pho" /></td>
<td><input type="text" size="28%" name="abr_exa1_fax" /></td>
<td><input type="text" name="abr_exa1_spe" /></td>
</tr>
<tr>
<td align="center">2.</td>
<td><input type="text" name="abr_exa2_nam" /></td>
<td><input type="text" name="abr_exa2_des" /></td>
<td><input type="text" size="50%" name="abr_exa2_add" /></td>
<td><input type="text" size="45%" name="abr_exa2_ema" /></td>
<td><input type="text" size="30%" name="abr_exa2_pho" /></td>
<td><input type="text" size="28%" name="abr_exa2_fax" /></td>
<td><input type="text" name="abr_exa2_spe" /></td>
</tr>
<tr>
<td align="center">3.</td>
<td><input type="text" name="abr_exa3_nam" /></td>
<td><input type="text" name="abr_exa3_des" /></td>
<td><input type="text" size="50%" name="abr_exa3_add" /></td>
<td><input type="text" size="45%" name="abr_exa3_ema" /></td>
<td><input type="text" size="30%" name="abr_exa3_pho" /></td>
<td><input type="text" size="28%" name="abr_exa3_fax" /></td>
<td><input type="text" name="abr_exa3_spe" /></td>
</tr>
<tr>
<td align="center">4.</td>
<td><input type="text" name="abr_exa4_nam" /></td>
<td><input type="text" name="abr_exa4_des" /></td>
<td><input type="text" size="50%" name="abr_exa4_add" /></td>
<td><input type="text" size="45%" name="abr_exa4_ema" /></td>
<td><input type="text" size="30%" name="abr_exa4_pho" /></td>
<td><input type="text" size="28%" name="abr_exa4_fax" /></td>
<td><input type="text" name="abr_exa4_spe" /></td>
</tr>

<tr><td colspan="8">Examiners from India: -</td></tr>
<tr>
<td align="center">S.No.</td>
<td align="center">Name</td>
<td align="center">Designation</td>
<td align="center">Complete Address (include zip & country code)</td>
<td align="center" width="20%">Email</td>
<td align="center">Phone(include country code & city code)</td>
<td align="center">Fax (include ocuntry code & city code)</td>
<td align="center">Area of specialization</td>
</tr>
<tr>
<td align="center">1.</td>
<td><input type="text" name="ind_exa1_nam" /></td>
<td><input type="text" name="ind_exa1_des" /></td>
<td><input type="text" size="50%" name="ind_exa1_add" /></td>
<td><input type="text" size="45%" name="ind_exa1_ema" /></td>
<td><input type="text" size="30%" name="ind_exa1_pho" /></td>
<td><input type="text" size="28%" name="ind_exa1_fax" /></td>
<td><input type="text" name="ind_exa1_spe" /></td>
</tr>
<tr>
<td align="center">2.</td>
<td><input type="text" name="ind_exa2_nam" /></td>
<td><input type="text" name="ind_exa2_des" /></td>
<td><input type="text" size="50%" name="ind_exa2_add" /></td>
<td><input type="text" size="45%" name="ind_exa2_ema" /></td>
<td><input type="text" size="30%" name="ind_exa2_pho" /></td>
<td><input type="text" size="28%" name="ind_exa2_fax" /></td>
<td><input type="text" name="ind_exa2_spe" /></td>
</tr>
<tr>
<td align="center">3.</td>
<td><input type="text" name="ind_exa3_nam" /></td>
<td><input type="text" name="ind_exa3_des" /></td>
<td><input type="text" size="50%" name="ind_exa3_add" /></td>
<td><input type="text" size="45%" name="ind_exa3_ema" /></td>
<td><input type="text" size="30%" name="ind_exa3_pho" /></td>
<td><input type="text" size="28%" name="ind_exa3_fax" /></td>
<td><input type="text" name="ind_exa3_spe" /></td>
</tr>
<tr>
<td align="center">4.</td>
<td><input type="text" name="ind_exa4_nam" /></td>
<td><input type="text" name="ind_exa4_des" /></td>
<td><input type="text" size="50%" name="ind_exa4_add" /></td>
<td><input type="text" size="45%" name="ind_exa4_ema" /></td>
<td><input type="text" size="30%" name="ind_exa4_pho" /></td>
<td><input type="text" size="28%" name="ind_exa4_fax" /></td>
<td><input type="text" name="ind_exa4_spe" /></td>
</tr>
<tr><td colspan="8" align="center">
<input type="submit" name="submit" style="background:#FFFFFF; font-size:18px; font-weight:bold; text-align:center" value="SUBMIT" />
</td></tr>
</table>
</form>
	<br class="clearfix" />
</div>
	

	

</body>
</html>