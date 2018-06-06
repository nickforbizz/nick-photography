<?php
// error_reporting(0);
$conn_error = "Sorry, Could not Connect";

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";

$db = 'nickseditors';

$connDb = new MySQli($mysql_host, $mysql_user, $mysql_pass, $db);

if ($connDb->errno) {
	echo $connDb->error;
}

 ?>
