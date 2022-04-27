<?php
require 'scripts/connectdatabase.php';

$email = $_POST['email'];
$sql = $db->query("SELECT * FROM users WHERE email='$email'");
if (!$sql) {
	echo 'Could not run query: ' . mysql_error();
}
$row = mysql_fetch_row($sql);
$fname = $row['FNAME'];

echo "Welcome back, " . $fname . ", enjoy your stay!";
?>
