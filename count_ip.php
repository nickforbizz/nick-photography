<?php

require 'conn.inc.php';
$user_ip = $_SERVER['REMOTE_ADDR'];


function ip_exists ($ip) {
	global $user_ip, $connDb;
	$query =$connDb->query("SELECT `ip` FROM `ip_visits` WHERE `ip`='$user_ip' ");

	if ($query->num_rows >= 1) {
		return true;
	} else{
		return false;
	}
}
 function add_ip ($ip) {
	 $query_run =$connDb.query( "INSERT INTO `ip_visits` VALUES ('$ip')");


 }

 function update_count () {
	 $query_run =$conDb->query( "SELECT `count` FROM `count_ip`");

	 if ($query_run) {

		 $count = $conDb->result($query_run, 0, 'count');
		 $count_inc = $count + 1;

		 $query_update = $conDb->query("UPDATE `count_ip` SET `count`='$count_inc'");
	 }

 }

 if (!ip_exists($user_ip)) {
	 update_count();
	 add_ip($user_ip);
 }

?>

<html>
<h><?php
$query = $connDb->query("SELECT `count` FROM `count_ip`");
$counts = $query->fetch_assoc();
$total_counts = $counts['count'];
echo "$total_counts"; ?></h>
</html>
