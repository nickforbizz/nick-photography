<!-- comments session  -->
<?php
require 'conn.inc.php';
if (isset($_POST['comments']) && !empty($_POST['comments']) && isset($_POST['email']) && !empty($_POST['email']) ){


$comments = $_POST['comments'];
$email = $_POST['email'];

$query = "SELECT `comments` FROM `commentstable` WHERE `comments`='$comments'";
$query_run = mysql_query($query);
if (mysql_num_rows($query_run) !=0 ) {
  return false;
}else {

$query_comnts = "INSERT INTO `commentstable` (email, comments) VALUES('$email','$comments')";
$query_run_comnts = mysql_query($query_comnts);
if ($query_comnts) {
  return true;
}else {
  return false;
}
}
}



?>
