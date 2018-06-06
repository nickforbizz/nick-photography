<?php
$conDb = new mysqli($mysql_host, $mysql_user, $mysql_pass, $db);
ob_start();
session_start();

$current_file = $_SERVER['SCRIPT_NAME'];
if (isset($_SERVER['HTTP_REFERER']) && !empty ($_SERVER['HTTP_REFERER'])){
$http_referer = $_SERVER['HTTP_REFERER'];
}

function loggedIn(){
	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
		return true;
	}else {
		return false;
	}
}

function getUserField($field){

	$query = $conDb->query("SELECT `$field` FROM `users` WHERE `id` = '".$_SESSION['user_id']."'");
	if ($query)) {
		if ($query_results = mysqli_result($query_run, 0, $field)){
			return $query_results;
		}
	}
}


?>
