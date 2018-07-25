<?php include("connection.php");

$eid = $_GET['eid'];

$query = 'UPDATE `examiners` SET `Status_live_dead` = "LIVE" WHERE `User_id` = "'.$eid.'"';

$result = mysqli_query($conn,$query);

header('Location: index.php');



?>