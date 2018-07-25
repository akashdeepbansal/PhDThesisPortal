<?php
$servername = "localhost"; //replace it with your database server name
$username = "root";  //replace it with your database username
$password = "";  //replace it with your database password
$dbname = "phd_portal";

// Create pg_connect
//$conn = mysql_connect
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . pg_connect_error());
}


?>

